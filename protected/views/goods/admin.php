<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Quản lí',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('goods-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Quản lí Sản phẩm</h1>

<?php echo CHtml::link('Tìm kiếm nâng cao','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'goods-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'ajaxUpdate'=>false,
        'summaryText'=>'Số sản phẩm từ {start}-{end} (trong tổng số {count} sản phẩm)',
        'template'=>'{summary}{items}{pager}',
        'pager'=>array(
                'header'=>'',
                'prevPageLabel'=>'« Trước',
                'nextPageLabel'=>'Tiếp theo »',
        ),
	'columns'=>array(
                array(
                    'name' => 'image_url',
                    'type' => 'raw',
                    'value' => 'CHtml::image( Yii::app()->request->baseUrl."/images/".$data->image_url,"",array("width"=>"100px"))', 
                ),
		'fake_code',
		'name',
		'price',
		'sale_off_price',
		'description',
		'is_promoted',
		'is_favorited',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
