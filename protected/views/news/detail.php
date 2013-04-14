<div class="detai-need-to-know">
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/wz_tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_centerwindow.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_followscroll.js"></script>
    
    <div class="list-goods-by-type">THÔNG TIN CHI TIẾT</div>
    <div class="detai-need-to-know-title"><span class="title"><?php echo $model->title?></span> - (<?php echo $model->update_time ?>)</div>
    <div class="detai-need-to-know-content">
        <?php echo $model->content;?>
    </div>
</div>