<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */

$this->breadcrumbs=array(
	'Quản lí',
);

$this->menu=array(
	array('label'=>'Tạo Loại sản phẩm', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('goods-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Quản lí Loại sản phẩm</h1>

<?php echo CHtml::link('Tìm kiếm nâng cao','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'goods-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'summaryText'=>'Số sản phẩm từ {start}-{end} (trong tổng số {count} sản phẩm)',
        'template'=>'{summary}{items}{pager}',
        'pager'=>array(
                'header'=>'',
                'prevPageLabel'=>'« Trước',
                'nextPageLabel'=>'Tiếp theo »',
        ),
	'columns'=>array(
		'code',
		'name',
		'father_code',
		'search_type',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
