<div class="list-goods">
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/wz_tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_centerwindow.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/tip_followscroll.js"></script>
    
    <div class="list-goods-by-type"><?php echo $searchType?></div>
    
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