<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <link href="<?php echo Yii::app()->request->baseUrl;?>/images/logo.ico" rel="shortcut icon" type="image/x-icon" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dangkhoi.css"/>
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.outerhtml.js"></script>
        <script type="text/javascript">
    
            //SuckerTree Vertical Menu 1.1 (Nov 8th, 06)
            //By Dynamic Drive: http://www.dynamicdrive.com/style/

            var menuids=["suckertree1"] //Enter id(s) of SuckerTree UL menus, separated by commas

            function buildsubmenus(){
            for (var i=0; i<menuids.length; i++){
              var ultags=document.getElementById(menuids[i]).getElementsByTagName("ul")
                for (var t=0; t<ultags.length; t++){
                ultags[t].parentNode.getElementsByTagName("a")[0].className="subfolderstyle"
                            if (ultags[t].parentNode.parentNode.id==menuids[i]) //if this is a first level submenu
                                    ultags[t].style.left=ultags[t].parentNode.offsetWidth+"px" //dynamically position first level submenus to be width of main menu item
                            else //else if this is a sub level submenu (ul)
                              ultags[t].style.left=ultags[t-1].getElementsByTagName("a")[0].offsetWidth+"px" //position menu to the right of menu item that activated it
                ultags[t].parentNode.onmouseover=function(){
                this.getElementsByTagName("ul")[0].style.display="block"
                }
                ultags[t].parentNode.onmouseout=function(){
                this.getElementsByTagName("ul")[0].style.display="none"
                }
                }
                            for (var t=ultags.length-1; t>-1; t--){ //loop through all sub menus again, and use "display:none" to hide menus (to prevent possible page scrollbars
                            ultags[t].style.visibility="visible"
                            ultags[t].style.display="none"
                            }
              }
            }

            if (window.addEventListener)
            window.addEventListener("load", buildsubmenus, false)
            else if (window.attachEvent)
            window.attachEvent("onload", buildsubmenus)

        </script>

</head>

<body>
    
    <div class="container" id="page">
        <div id="header" class="header">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="980" height="170">
              <param name="movie" value="<?php echo Yii::app()->request->baseUrl;?>/images/top_banner.swf">
              <param name="quality" value="high">
               <param name="wmode" value="transparent">
              <embed src="<?php echo Yii::app()->request->baseUrl;?>/images/top_banner.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="980" height="170" wmode="transparent">
            </object>
        </div><!--header-->
        
        <div id="main-content">
            <div id="mainmenu">
		<ul id="yw0">
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">TRANG CHỦ</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">GIỚI THIỆU</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">CHƯƠNG TRÌNH KHUYẾN MÃI</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">TIN TỨC</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">KHÁCH HÀNG</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">GÓP Ý</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">BẢNG GIÁ</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">LIÊN HỆ</a></li>
                </ul> 
            </div><!-- mainmenu -->
         
            <div id="left-sidebar">
                <div id="goods-menu">         
                    <ul id="suckertree1">
                        <img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_left_top.gif"/>
                        <li>
                           <a href="catalog.aspx?cat=01" class="subfolderstyle">Bong Bóng Trang Trí Tiệc Cưới</a>
                           <ul style="left: 200px; visibility: visible; display: none;">
                              <li><a href="list.aspx?cat=29/03/2011 07/40/53">Cổng Bong Bóng TC</a></li>
                              <li><a href="list.aspx?cat=02/04/2011 01/25/55">Bàn Ký Tên</a></li>
                              <li><a href="list.aspx?cat=02/04/2011 01/26/20">Bong Bóng Lối Đi</a></li>
                              <li><a href="list.aspx?cat=02/04/2011 01/26/40">Bong Bóng Sân Khấu TC</a></li>
                              <li><a href="list.aspx?cat=10/11/2011 08/13/28">Bong Bóng Trang Trí TC</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="catalog.aspx?cat=02" class="subfolderstyle">Bong Bóng Trang Trí Sinh Nhật</a>
                           <ul style="left: 200px; visibility: visible; display: none;">
                              <li><a href="list.aspx?cat=02/04/2011 01/28/08">Cổng Chào Sinh Nhật</a></li>
                              <li><a href="list.aspx?cat=02/04/2011 01/28/45">Bong Bóng Sân Khấu</a></li>
                              <li><a href="list.aspx?cat=05/12/2011 08/48/12">Dịch Vụ Sinh Nhật</a></li>
                              <li><a href="list.aspx?cat=11/10/2012 03/45/50">Backdrop Sinh Nhật</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="catalog.aspx?cat=04" class="subfolderstyle">Bong Bóng Trang trí Event</a>
                           <ul style="left: 200px; visibility: visible; display: none;">
                              <li><a href="list.aspx?cat=04/04/2011 09/47/07">Cổng Bong Bóng Evens</a></li>
                              <li><a href="list.aspx?cat=04/04/2011 09/47/18">Bong Bóng Sân Khấu </a></li>
                              <li><a href="list.aspx?cat=06/06/2011 07/09/48">Hình Vip</a></li>
                              <li><a href="list.aspx?cat=06/06/2011 07/30/30">Bong Bóng Trang Trí</a></li>
                              <li><a href="list.aspx?cat=25/08/2011 07/22/09">Tạo Chữ Bằng Bong Bóng</a></li>
                           </ul>
                        </li>
                        <li><a href="catalog.aspx?cat=05">Bong Bóng Trang Trí Noel</a></li>
                        <li><a href="catalog.aspx?cat=06/06/2011 09/33/15">Bong Bóng Trang Trí Siêu Thị</a></li>
                        <li><a href="catalog.aspx?cat=06/06/2011 09/33/25">Bong Bóng Bay</a></li>
                        <li><a href="catalog.aspx?cat=06/06/2011 09/33/34">Bong Bóng Tạo Hình</a></li>
                        <li><a href="catalog.aspx?cat=06/06/2011 09/33/41">Bong Bóng In logo</a></li>
                        <li><a href="catalog.aspx?cat=06/06/2011 09/33/49">Khinh Khí Cầu </a></li>
                        <li>
                           <a href="catalog.aspx?cat=07/06/2011 05/04/02" class="subfolderstyle">Bong Bóng Bán Sỉ &amp; Lẻ</a>
                           <ul style="left: 200px; visibility: visible; display: none;">
                              <li><a href="list.aspx?cat=07/06/2011 05/13/30">Bong Bóng Hình Ngôi Sao</a></li>
                              <li><a href="list.aspx?cat=07/06/2011 05/14/07">Bong Bóng Đài Loan</a></li>
                              <li><a href="list.aspx?cat=08/06/2011 10/40/31">Bong Bóng Tạo Hình</a></li>
                              <li><a href="list.aspx?cat=07/11/2012 09/00/10">Bong Bóng Hình Trái Tim</a></li>
                              <li><a href="list.aspx?cat=22/03/2013 07/40/31">Bong Bóng Malaysia, HQ</a></li>
                           </ul>
                        </li>
                        <li><a href="catalog.aspx?cat=12/06/2011 09/37/51">Dịch Vụ Thuê và Cho Thuê</a></li>
                        <li><a href="catalog.aspx?cat=26/10/2011 10/56/46">Bong Bóng Trang Trí Lễ Hội</a></li>
                        <li><a href="catalog.aspx?cat=28/03/2012 09/16/14">Cho Thuê Rối Người, Mascot </a></li>
                     </ul>
                </div>
                
                <div id="promoted-list">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/km_top.gif" />
                    <marquee width="195px" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="up" scrollamount="3">
                        <div class="highlight-detail">
                            <?php 
                                $goods=Goods::model()->findAllByAttributes(
                                        array('is_promoted'=>1),
                                        array('limit'=>10,'order'=>'update_time desc')
                                );

                                foreach ($goods as $aGoods) {?>
                                    <a href="<?php echo $this->createUrl('/goods/viewdetail',array('code'=>$aGoods->code)) ?>">
                                        <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$aGoods->image_url;?>" 
                                            alt="<?php echo $aGoods->name ?>"
                                            title="<?php echo $aGoods->name ?>"/>
                                    </a>
                                    <?php
                                }
                            ?>
                        </div>
                    </marquee>
                </div>
                <div id="favorited-list">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/uc_top.gif" />
                    <marquee width="195px" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="up" scrollamount="3">
                        <div class="highlight-detail">
                            <?php 
                                $goods=Goods::model()->findAllByAttributes(
                                        array('is_favorited'=>1),
                                        array('limit'=>10,'order'=>'update_time desc')
                                );

                                foreach ($goods as $aGoods) {?>
                                    <a href="<?php echo $this->createUrl('/goods/viewdetail',array('code'=>$aGoods->code)) ?>">
                                        <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$aGoods->image_url;?>" 
                                            alt="<?php echo $aGoods->name ?>"
                                            title="<?php echo $aGoods->name ?>"/>
                                    </a>
                                    <?php
                                }
                            ?>
                        </div>
                    </marquee>
                </div>
                
                <div id="left-highlight">
                    <a href="" title="Trang Phục Bằng Bong Bóng 001"><img src="http://www.bongbongtrangtri.com/upload/DSC05185.JPG"/></a>
                    <a href="" title="Rối Người Mặc Gấu Trúc Panda 012"><img src="http://www.bongbongtrangtri.com/upload/anhdong.gif"/></a>
                    <a href="" title="Bơm Bong Bóng 001"><img src="http://www.bongbongtrangtri.com/upload/bom.gif"/></a>
                    <a href="" title=""><img src="http://www.bongbongtrangtri.com/upload/Bong%20B%C3%B3ng%20Trang%20Tr%C3%AD%20021.JPG"/></a>
                    <a href="" title="Cho Thuê Máy Bắn Kim Tuyến"><img src="http://www.bongbongtrangtri.com/upload/M%C3%A1y-T-o-Kh%C3%B3i.gif"/></a>
                    <a href="" title="Cho Thuê Rối Hơi"><img src="http://www.bongbongtrangtri.com/upload/R%C3%B4%CC%81i%20H%C6%A1i%201%20Ch%C3%A2n.jpg"/></a>
                    <a href="" title="Bong Bóng Tạo Hình"><img src="http://www.bongbongtrangtri.com/upload/T-o-h%C3%ACnh.gif"/></a>
                </div>
            </div>
            
            
            <div id="content">
                <?php echo $content; ?>
            </div>
            
            <div id="right-sidebar">
                <div id="support">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sup_top.gif" />
                    
                    <table>
                        <tr>
                            <td align="left" class="suptext" style="width: 80px; height: 50px">
                                Kinh doanh:</td>
                            <td style="width: 100px">
                               <a href="ymsgr:sendIM?thuytrang131084"><img src="http://opi.yahoo.com/online?u=thuytrang131084&amp;m=g&amp;t=2" border="0"></a></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 1px">
                                <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sup_line.gif"></td>
                        </tr>
                        <tr>
                            <td align="left" class="suptext" style="width: 80px; height: 50px">
                                Tư vấn:</td>
                            <td style="width: 100px">
                               <a href="ymsgr:sendIM?bongbongtrangtritv"><img src="http://opi.yahoo.com/online?u=bongbongtrangtritv&amp;m=g&amp;t=2" border="0"></a></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sup_line.gif"></td>
                        </tr>
                        <tr>
                            <td align="left" class="suptext" style="width: 80px; height: 50px">
                                Báo giá:</td>
                            <td style="width: 100px">
                               <a href="ymsgr:sendIM?hai_dang343"><img src="http://opi.yahoo.com/online?u=hai_dang343&amp;m=g&amp;t=2" border="0"></a></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sup_line.gif"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 45px" align="center">
                                <a href="mailto:bongbongtrangtri.com@gmail.com"><span style="font-family:Tahoma; font-size:12px; color:Blue">bongbongtrangtri.com@gmail.com</span></a>
                            <br>
                            <a href="mailto: hai_dang343@yahoo.com"><span style="font-family:Tahoma; font-size:12px; color:Blue"> hai_dang343@yahoo.com</span></a>
                            <br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 1px">
                                <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sup_line.gif"></td>
                        </tr>
                        <tr>
                            <td align="left" class="suptext" style="width: 80px; height: 35px">
                                Hotline:</td>
                            <td style="width: 100px; font-family:Tahoma; font-size:17px; color:#df0e3a; font-weight:bold">
                                0908 993 414<br>0906 993 414</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sup_line.gif"></td>
                        </tr>
                         <tr>
                            <td align="left" class="suptext" style="width: 80px; height: 35px">
                                Điện thoại:</td>
                            <td style="width: 100px; font-family:Tahoma; font-size:17px; color:#df0e3a; font-weight:bold">
                                08 3743 8584</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <img src="<?php echo Yii::app()->request->baseUrl;?>/images/sup_line.gif"></td>
                        </tr>
                        <tr>
                            <td align="left" class="suptext" style="width: 80px; height: 55px" colspan="2">
                                Địa chỉ:<br>
                                                                                                            <span style="font-size: 10pt; color: #0066cc; font-family: Tahoma">28/5 đường số 2,
                                    Bình Trưng Đông Q.2, TP.HCM</span>
                            </td>

                        </tr>
                    </table>
                </div>
                
                <div id="need-to-know">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/need_to_know.png" />
                    <div class="need-to-know-detail">
                        <?php 
                            $needToKnows=  NeedToKnow::model()->findAllByAttributes(
                                    array(),
                                    array('limit'=>10,'order'=>'update_time desc')
                            );

                            foreach ($needToKnows as $info) {?>
                                <div class="a-need-to-know">
                                    <img src="<?php echo Yii::app()->request->baseUrl.'/images/icon_tin.gif';?>" />
                                    <a href="<?php echo $this->createUrl('/needToKnow/viewdetail',array('code'=>$info->code)) ?>"><?php echo $info->title?></a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                
                <div id="news">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/news_top.gif" />
                    <div class="news-detail">
                        <?php 
                            $newss=  News::model()->findAllByAttributes(
                                    array(),
                                    array('limit'=>10,'order'=>'update_time desc')
                            );

                            foreach ($newss as $info) {?>
                                <div class="a-news">
                                    <div class="news-images"><img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$info->image_url;?>" /></div>
                                    <a href="<?php echo $this->createUrl('/needToKnow/viewdetail',array('code'=>$info->code)) ?>"><?php echo $info->title?></a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                
                <div id="maps">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/images/map_top.gif" />
                    <div class="map-detail">
                        <img src="<?php echo Yii::app()->request->baseUrl;?>/images/map_md.gif" />
                    </div>
                </div>
                
                <div id="right-highlight">
                    <a href="" title="Cung Cấp Bong Bóng Sĩ Và Lẽ"><img src="http://www.bongbongtrangtri.com/upload/Bong-B%C3%B3ng-01.gif"/></a>
                    <a href="" title="Bóng Bạc Hình Ngôi Sao"><img src="http://www.bongbongtrangtri.com/upload/B%C3%B3ng-b-c.gif"/></a>
                    <a href="" title="Bong Bóng in logo"><img src="http://www.bongbongtrangtri.com/upload/Bong-b%C3%B3ng-in-logo-01.gif"/></a>
                </div>
            </div>
            <div style="clear: both"></div>
            <div id="mainmenu">
		<ul id="yw0">
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">TRANG CHỦ</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">GIỚI THIỆU</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">CHƯƠNG TRÌNH KHUYẾN MÃI</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">TIN TỨC</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">KHÁCH HÀNG</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">GÓP Ý</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">BẢNG GIÁ</a><img src="<?php echo Yii::app()->request->baseUrl;?>/images/menu_line.gif"/></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index');?>">LIÊN HỆ</a></li>
                </ul> 
            </div><!-- mainmenu -->
        </div>
        <div id="footer">
            <span style="font-size: 9pt; color: saddlebrown; font-family: Tahoma">
                    Copyright © Hải Đăng. All rights reserved <br>Địa Chỉ: 28/5 đường số 2, Bình Trưng Đông,
                    Q.2, TP.Hồ Chí Minh <br>Điện Thoại: (08) 3743 8584 | Di động: 0908 993 414 - 0906 993 414 | Email:  <a href="mailto:bongbongtrangtri.com@gmail.com"><span style="font-family:Tahoma; font-size:12px; color:Blue">bongbongtrangtri.com@gmail.com</span></a></span>
        </div>
    </div><!-- page -->
    
    
</body>
</html>
