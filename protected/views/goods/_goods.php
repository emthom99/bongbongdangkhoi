<div class="agoods">
    <div class="goods-image">
        <a href="<?php echo $this->createUrl('Goods/goodsDetail',array('id'=>$data->code));?>" title="">
            <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$data->image_url?>"/>
        </a>
    </div>
    <div class="goods-name"><a href="<?php echo $this->createUrl('Goods/goodsDetail',array('id'=>$data->code));?>"><?php echo $data->name?></a></div>
    <div class="price-part">
        <div class="price"><?php echo $data->price?></div>
        <div class="goods-sep"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/price_line.gif"/></div>
        <div class="link-goods"><a href="<?php echo $this->createUrl('Goods/goodsDetail',array('id'=>$data->code));?>">Xem</a></div>
    </div>
</div>