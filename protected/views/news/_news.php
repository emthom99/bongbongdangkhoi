<div class="anews">
    <div class="title"><a href="<?php echo $this->createUrl('news/detail',array('id'=>$data->code))?>"><?php echo $data->title?></a></div>
    <div class="thumbnail"><a href="<?php echo $this->createUrl('news/detail',array('id'=>$data->code))?>"><img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$data->image_url;?>"/></a></div>
    <div class="news-info">
        <div class="description"><?php echo $data->description;?></div>
        <div class="read-more">[<a href="<?php echo $this->createUrl('news/detail',array('id'=>$data->code))?>">Xem tiếp</a>]</div>
    </div>
</div>