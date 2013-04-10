<div id="main-intr">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="495" height="300">
      <param name="movie" value="<?php echo Yii::app()->request->baseUrl;?>/images/main.swf">
      <param name="quality" value="high">
       <param name="wmode" value="transparent">
      <embed src="<?php echo Yii::app()->request->baseUrl;?>/images/main.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="495" height="300" wmode="transparent">
    </object>
</div>

<div class="list-goods">
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/wz_tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_centerwindow.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_followscroll.js"></script>
    
    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/HomePage_48.gif"/>
    <div class="goods-detail">
        <?php foreach ($newestGoods as $goods): ?>
        <div class="agoods">
            <div class="goods-image">
                <a href="<?php echo $this->createUrl('Goods/goodsDetail',array('id'=>$goods->code));?>" title="">
                    <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$goods->image_url?>"/>
                </a>
            </div>
            <div class="goods-name"><a href="<?php echo $this->createUrl('Goods/goodsDetail',array('id'=>$goods->code));?>"><?php echo $goods->name?></a></div>
            <div class="price-part">
                <div class="price"><?php echo $goods->price?></div>
                <div class="goods-sep"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/price_line.gif"/></div>
                <div class="link-goods"><a href="<?php echo $this->createUrl('Goods/goodsDetail',array('id'=>$goods->code));?>">Xem</a></div>
            </div>
        </div>
        
        <?php endforeach;?>
    </div>
    <script type="text/javascript">
        html="";
        $(".agoods").each(function(index){
                switch(index%3){
                        case 0:
                                html+='<tr><td>'+$(this).outerHTML()+'</td>';
                                break;
                        case 2:
                                html+='<td>'+$(this).outerHTML()+'</td></tr>';
                                break;
                        default:
                                html+='<td>'+$(this).outerHTML()+'</td>';
                                break;

                }
        });

        if (($(".agoods").size()%3)!=0)
                html+='</tr>';

        $(".goods-detail").html('<table>'+html+'</table>');
        
        $('.goods-image a').bind({
            mouseover: function(){
                Tip('<img width="400px" src="'+$(this).find('img').attr('src')+'"/>');               
            },
            mouseout: function(){
                UnTip();
            }
            
        });
    </script>
</div>

