<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="ThemeFuse">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Vehicle Registration - Homepage</title>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700|PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico">

<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">
<!-- custom CSS -->
<link href="custom.css" media="screen" rel="stylesheet">

<!-- main JS libs  -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/respond.min.js"></script>					 
<script src="js/libs/jquery.min.js"></script>

<!-- scripts  -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/general.js"></script>
<script src="js/hoverIntent.js"></script>
<!-- carousel -->
<script src="js/jquery.carouFredSel.min.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<!-- styled select -->
<link rel="stylesheet" href="css/cusel.css">
<script src="js/cusel-min.js"></script>

<link href="rs-plugin/css/settings.css" media="screen" rel="stylesheet">
<script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</head>
<body>
<?php 
	$conn=new mysqli("localhost","root","","vehicle_registration");
	if($conn->connect_error)
	{
		die("connection error ".$conn->connect_error);
	}
	$owner="select * from owner";
	$r_owner= mysqli_query($conn,$owner) or die(mysql_error());
	
	$vehicle="select * from vehicle";
	$r_vehicle=mysqli_query($conn,$vehicle) or die(mysql_error());	
?>
<div class="body_wrap homepage">
	<div class="header_top">
		<div class="container">
			<div class="logo">
				<h3><a href="index.php">Vehicle Registration System</a></h3>
			</div>   
			<nav id="topmenu" class="clearfix">            
				<ul class="dropdown">    
                	<li class="menu-level-0 current-menu-ancestor"><a href="index.php"><span>Home</span></a>
					</li>
					<li class="menu-level-0 "><a href="offers-search.php"><span>Search-Vehicle</span></a>
                    </li>
					<li class="menu-level-0 "><a href="offers-search-1.php"><span>Search-Owner</span></a>
                    </li>
                    <li class="menu-level-0"><a href="vehicle_registration_system.php"><span>Admin</span></a>
					</li>
				</ul>
			</nav>    
		</div>
	</div>
	<div class="header" style="background:#000">
		<div class="fullwidthbanner-container"> 
			<div class="fullwidthbanner">
				<ul>
				<li data-transition="fade" data-slotamount="1" data-masterspeed="500">
					<img src="images/temp/slider_1_1.jpg" data-fullwidthcentering="on">
                    
                    <div class="caption sft text_line" data-x="10" data-y="190" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
                    <div class="caption sfb text_line" data-x="10" data-y="300" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
					<div class="caption sfl white_text big_title" data-x="10" data-y="220" data-speed="900" data-start="500" data-easing="easeOutExpo">
                         <a href="#"><strong>CARS OWNERS</strong></a>
                    </div>
                    <div class="caption sfr white_text subtitle" data-x="10" data-y="257" data-speed="900" data-start="700" data-easing="easeOutExpo">
                         Registration of <span>Owners</span>
                    </div>
                    
				</li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
					<img src="images/temp/slider_1_2.jpg" data-fullwidthcentering="on">
                    
                    <div class="caption sft text_line" data-x="550" data-y="250" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
                    <div class="caption sfb text_line" data-x="550" data-y="360" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
                    
					<div class="caption sft white_text big_title" data-x="550" data-y="280" data-speed="900" data-start="500" data-easing="easeOutExpo">
                         <a href="#"><strong>UNLIMITED STORAGE</strong></a>
                    </div>
                    <div class="caption sfb white_text subtitle" data-x="550" data-y="317" data-speed="900" data-start="700" data-easing="easeOutExpo">
                         We can <span>STORE</span> unlimited vehicles in our database
                    </div>
				</li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
					<img src="images/temp/slider_1_3.jpg" data-fullwidthcentering="on">
                    
                    <div class="caption sft text_line" data-x="10" data-y="190" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
                    <div class="caption sfb text_line" data-x="10" data-y="300" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
                    
					<div class="caption sfr white_text big_title" data-x="10" data-y="220" data-speed="900" data-start="500" data-easing="easeOutExpo">
                         <a href="#"><strong>NEW REGISTRATION</strong></a>
                    </div>
                    <div class="caption sfl white_text subtitle" data-x="10" data-y="257" data-speed="900" data-start="700" data-easing="easeOutExpo">
                        All new <span>Registration System</span> available
                    </div>
				</li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
					<img src="images/temp/slider_1_4.jpg" data-fullwidthcentering="on">
                    
                    <div class="caption sft text_line" data-x="10" data-y="190" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
                    <div class="caption sfb text_line" data-x="10" data-y="300" data-speed="900" data-start="800" data-easing="easeOutExpo"></div>
                    
					<div class="caption sft black_text big_title" data-x="10" data-y="220" data-speed="900" data-start="500" data-easing="easeOutExpo">
                         <a href="#"><strong>ACCESSIBILITY</strong></a>
                    </div>
                    <div class="caption sfb black_text subtitle" data-x="10" data-y="257" data-speed="900" data-start="700" data-easing="easeOutExpo">
                       Easy way to access the <span>DATABASE</span>
                    </div>
				</li>
				</ul>
			</div>          
		</div>
		<script>
			jQuery(document).ready(function($) {
				if ($.fn.cssOriginal!=undefined)
					$.fn.css = $.fn.cssOriginal;
					$('.fullwidthbanner').revolution({
					delay:5000,
					startwidth:950,
					startheight:617,
					onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off
					hideThumbs:0,
					navigationType:"bullet",				// bullet, thumb, none
					navigationArrows:"none",				// nexttobullets, solo (old name verticalcentered), none
					navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
					navigationHAlign:"center",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",				// Horizontal Align left,center,right
					navigationHOffset:0,
					navigationVOffset:23,
					touchenabled:"on",						// Enable Swipe Function : on/off
					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
					hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
					hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
					hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
					fullWidth:"on",
					shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
				});
			});
		</script>
	</div>
	</form>
        <script type="text/javascript">
			jQuery(document).ready(function($) {					
				// Show/Hide Advanced Search
				$(".adv_search_hidden").hide();
				$("#adv_search_open").click(function(){								
					if ($(this).closest(".search_form").hasClass("advsearch_hide")) {
						$(".adv_search_hidden").stop().slideDown();
						$(this).html("Close Advanced Search");
					} else {
						$(".adv_search_hidden").stop().slideUp();
						$(this)ce("Advanced Search");
					}
					$(this).closest(".search_form").toggleClass("advsearch_hide");					
				});				
			});				
		</script>
</div>
	<div class="middle_row row_light_gray">
		<div class="container clearfix">  
			<!-- week offer -->
            <div class="week_offer">
            	<h2>CAR OF THE DAY</h2>
                <div class="offer_box">
					<?php $row_car= $r_vehicle->fetch_row();?>
	                <div class="offer_image"><a href="#"><img width="430px" height="280px" src="Uploads/<?php if($row_car[10]) echo $row_car[10]; else echo 'default.jpg'; ?>" alt=""></a></div>
                    <div class="offer_text">
                    	<h3><?php echo $row_car[1]; ?></h3>
                        <div class="offer_price">Model Name: <?php echo $row_car[2]; ?></div>
                        <div class="offer_descr">
                        REG. NUMBER : <?php echo $row_car[4]; ?><br>
						SEATING CAPACITY : <?php echo $row_car[9]; ?><br>
						MFG. YEAR : <?php echo $row_car[8]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="special_offers">
            	<h2>ALL AVAILABLE CARS</h2>
                <div id="special_offers">
                	<?php
							if($r_vehicle->num_rows > 0)
							{
							while($row = $r_vehicle->fetch_row()) 
							{?>
							<div class="special_item">
								<div class="special_image">
								<a href="#"><img width="310px" height="134px" src="Uploads/<?php if($row[10]) echo $row[10]; else echo 'default.jpg'; ?> " alt=""></a>
								</div>
	                        <div class="special_text">
                        	<h3><?php echo $row[1]; ?></h3>
                            <div class="info_row"><span>MODEL NAME :</span> <?php echo $row[2]; ?></div>
                            <div class="info_row"><span>REG. NO :</span> <?php echo $row[4]; ?></div>
                            <div class="info_row"><span>MFG. YEAR :</span> <?php echo $row[8]; ?></div>
                            <div class="info_row"><span>SEATING CAPACITY :</span> <?php echo $row[9]; ?></div>
							</div>		
							</div>
					<?php } } ?>	
				</div>
                <a class="prev" id="special_offers_prev" href="#"></a>
            	<a class="next" id="special_offers_next" href="#"></a>	
            </div>
                <script>	
				jQuery(document).ready(function($) {
					function carSpecicalInit() {
						var car_specical = $('#special_offers');
						car_specical.carouFredSel({
							prev : "#special_offers_prev",
							next : "#special_offers_next",
							infinite: true,
							circular: false,
							auto: false,
							width: '100%',
							direction: "down",						
							scroll: {
								items : 1
							}
						});						
					}
					$(window).load(function() {
						carSpecicalInit();
					}); 
					var resizeTimer;
					$(window).resize(function() {
						clearTimeout(resizeTimer);
						resizeTimer = setTimeout(carSpecicalInit, 100);
					});							          
				});
			    </script> 
            </div>           		
		</div>
	</div>
	<div class="middle_row latest_offers">            
        <div id="latest_offers">
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_01.jpg" alt=""></a>
            <a href="#">Mercedes-Benz ML 350</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_02.jpg" alt=""></a>
            <a href="#">Porsche CAYENNE S</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_03.jpg" alt=""></a>
            <a href="#">Infiniti FX 37 S Premium</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_04.jpg" alt=""></a>
            <a href="#">Volvo XC60 D5 RE-Design</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_05.jpg" alt=""></a>
            <a href="#">BMW X5 Adaptive Drive Display</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_06.jpg" alt=""></a>
            <a href="#">Land Rover Sport SDV6 HSE</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_07.jpg" alt=""></a>
            <a href="#">Audi Q7 S-LINE PANORAMA</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_08.jpg" alt=""></a>
            <a href="#">Volkswagen Touareg R-Line</a>
            </div>
            <div class="latest_item">
            <a href="#"><img src="images/temp/prod_img_09.jpg" alt=""></a>
            <a href="#">Alfa Romeo Brera JTDm 2008</a>
            </div>
        </div>
        <a class="prev" id="latest_offers_prev" href="#"></a>
        <a class="next" id="latest_offers_next" href="#"></a>
        <script>	
        jQuery(document).ready(function($) {	
			var screenRes = $(window).width();
			
            $('#latest_offers').carouFredSel({
                prev : "#latest_offers_prev",
                next : "#latest_offers_next", 
                infinite: false,
                circular: true,
                auto: false,
                width: '100%',				
                scroll: {
                    items : 1,
					onBefore: function (data) {
						if (screenRes > 900) {
						data.items.visible.eq(0).animate({opacity: 0.15},300);
						data.items.old.eq(-1).animate({opacity: 1},300);
						data.items.visible.eq(-1).animate({opacity: 0.15},300);		               
						}
		            },
					onAfter: function (data) {
						if (screenRes > 900) {
						data.items.old.eq(0).animate({opacity: 1},300);	
						}
		            }
                }
            });			
			if (screenRes > 900) {
				var vis_items = $("#latest_offers").triggerHandler("currentVisible");
				vis_items.eq(-1).animate({opacity: 0.15},100);
				vis_items.eq(0).animate({opacity: 0.15},100);
			}
        });
        </script>             
	</div>
	<div class="middle_row row_light_gray brand_list">
		<div class="container">
	        <h2>MOST POPULAR BRANDS:</h2>
	            <ul>
	            	<li><a href="#"><img src="images/temp/brand_logo_1.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_2.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_3.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_4.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_5.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_6.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_7.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_8.png" alt=""></a></li>
	            </ul>
        </div>
	</div>
<div class="footer">
	<div class="container clearfix">
        <div class="copyright">
            Designed By Pawan Kumar Rawat
        </div>
    </div>
</div>
</body>
</html>
