<div id="a-goods-detail">
    <div class="goods-image">
        <a href=''>
            <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$model->image_url?>" />
        </a>
        
        <div class="goods-image-zoom">
            <img src="<?php echo Yii::app()->request->baseUrl;?>/images/zoom.gif" />
            <a href="">Xem ảnh lớn</a>
        </div>
    </div>
    
    <div class="goods-info">
        <table>
            <tr><td><img src="<?php echo Yii::app()->request->baseUrl;?>/images/kc_icon.gif" />THÔNG TIN SẢN PHẨM</td></tr>
            <tr><td><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" />Tên gọi<img src="<?php echo Yii::app()->request->baseUrl;?>/images/kc_line.gif" /></td><td><?php echo $model->name?></td></tr>
            <tr><td><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" />Mã hàng<img src="<?php echo Yii::app()->request->baseUrl;?>/images/kc_line.gif" /></td><td><?php echo $model->fake_code?></td></tr>
            <tr><td><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" />Giá<img src="<?php echo Yii::app()->request->baseUrl;?>/images/kc_line.gif" /></td><td><?php echo $model->price?></td></tr>
            <tr><td><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" />Sale Off<img src="<?php echo Yii::app()->request->baseUrl;?>/images/kc_line.gif" /></td><td><?php echo $model->sale_off_price?></td></tr>
            <tr><td><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" />Thông tin mô tả<img src="<?php echo Yii::app()->request->baseUrl;?>/images/kc_line.gif" /></td></tr>
        </table>
    </div>
</div>

<div class="list-goods">
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/wz_tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_centerwindow.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_followscroll.js"></script>
    
    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sp_khac.gif"/>
    <div class="goods-detail">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_goods',
        )); ?>
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
        
        $('.goods-detail .goods-image a').bind({
            mouseover: function(){
                Tip('<img width="400px" src="'+$(this).find('img').attr('src')+'"/>');               
            },
            mouseout: function(){
                UnTip();
            }
            
        });
    </script>
</div>