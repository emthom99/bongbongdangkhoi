<div class="a-goods-detail-top"><img class="corner-goods-detail" src="<?php echo Yii::app()->request->baseUrl;?>/images/kc1.gif"/><div class="padding-goods-detail">　</div><img class="corner-goods-detail" src="<?php echo Yii::app()->request->baseUrl;?>/images/kc2.gif"/></div>
<div id="a-goods-detail">
    <div class="goods-detail-image">
        <a class="goods-image-detail" href="#" onclick='window.open("<?php echo Yii::app()->request->baseUrl.'/images/'.$model->image_url?>","khunghinh","width=550,height=550,menubar=no,scrollbars=yes")'>
            <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$model->image_url?>" />
        </a>
        
        <div class="goods-image-zoom">
            <img src="<?php echo Yii::app()->request->baseUrl;?>/images/zoom.gif" />
            <a href="#" onclick='window.open("<?php echo Yii::app()->request->baseUrl.'/images/'.$model->image_url?>","khunghinh","width=550,height=550,menubar=no,scrollbars=yes")'>Xem ảnh lớn</a>
        </div>
    </div>
    
    <div class="goods-info">
        <table>
            <tr class="info-row"><td><img src="<?php echo Yii::app()->request->baseUrl;?>/images/kc_icon.gif" /></td><td>THÔNG TIN SẢN PHẨM</td></tr>
        </table>
        <table>
            <tr class="info-row"><td class="goods-info-dot"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" /></td><td class="goods-info-label">Tên gọi</td><td class="name-info"><?php echo $model->name?></td></tr>
            <tr class="info-row"><td class="goods-info-dot"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" /></td><td class="goods-info-label">Mã hàng</td><td class="fake-code-info"><?php echo $model->fake_code?></td></tr>
            <tr class="info-row"><td class="goods-info-dot"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" /></td><td class="goods-info-label">Giá</td><td class="price-info"><?php echo $model->price?></td></tr>
            <tr class="info-row"><td class="goods-info-dot"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" /></td><td class="goods-info-label">Sale Off</td><td class="sale-off-info"><?php echo $model->sale_off_price?></td></tr>
        </table>
        
        <table>
            <tr class="info-row"><td class="goods-info-dot"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/vien-sp.gif" /></td><td  class="label-description">Thông tin mô tả</td></tr>
        </table>
        <div class="description-info">
            <?php echo $model->description;?>
        </div>
    </div>
</div>
<div class="a-goods-detail-bottom"><img class="corner-goods-detail" src="<?php echo Yii::app()->request->baseUrl;?>/images/kc4.gif"/><div class="padding-goods-detail">　</div><img class="corner-goods-detail" src="<?php echo Yii::app()->request->baseUrl;?>/images/kc3.gif"/></div>

<div class="list-goods">
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/wz_tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_centerwindow.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_followscroll.js"></script>
    
    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sp_khac.gif"/>
    <div class="goods-detail">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_goods',
            'template'=>'{items}<div class="list-goods-pager">{pager}{summary}</div>',
            'pager'=>array(
                'class'=>'application.components.views.CDangKhoiPager',
                'maxButtonCount'=>3,
                'header'=>'Trang:',
                'prevPageLabel'=>'« Trước',
                'nextPageLabel'=>'Tiếp theo »',
            ),
            'summaryText'=>'Số sản phẩm từ {start}-{end} (trong tổng số {count} sản phẩm)',
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
                
        if ($(".agoods").size()==36)
            $('.list-goods-pager').css('display', 'block');

        $(".goods-detail .items").html('<table>'+html+'</table>');
        
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