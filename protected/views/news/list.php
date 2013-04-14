<div class="list-news">
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/wz_tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_centerwindow.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_followscroll.js"></script>
    
    <div class="list-goods-by-type">TIN TỨC - SỰ KIỆN</div>
    
    <div class="news-detail">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_news',
            'template'=>'{items}<div class="list-goods-pager">{pager}{summary}</div>',
            'pager'=>array(
                'class'=>'application.components.views.CDangKhoiPager',
                'maxButtonCount'=>10,
                'header'=>'Trang:',
                'prevPageLabel'=>'« Trước',
                'nextPageLabel'=>'Tiếp theo »',
            ),
            'summaryText'=>'Số tin từ {start}-{end} (trong tổng số {count} tin)',
        )); ?>
    </div>
    <script type="text/javascript">
        if ($(".anews").size()==17)
            $('.list-goods-pager').css('display', 'block');
    </script>
</div>