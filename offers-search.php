<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="ThemeFuse">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>AutoTrader - Search</title>
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
<!-- custom input -->
<script src="js/jquery.customInput.js"></script>
<!-- range slider -->
<link href="css/jslider.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.slider.bundle.js"></script>

<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="pageajax.js"></script>
<link rel="stylesheet" type="text/css" href="mainstyle.css">
<script type="text/javascript">
   function check(){
		if($('#number').val()===""){
			alert('Number Required');
			return false;
		}
		return true;
   }
   
</script>
</head>

<body>
	<?php 
		$eid="";
		$r_v="";
		$conn=new mysqli("localhost","root","","vehicle_registration");
		if($conn->connect_error)
		{
			die("connection error ".$conn->connect_error);
		}		
		if (isset($_POST["number"]))
		{
				
			function test_input($data) 
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			} 	
			$eid = test_input($_POST["number"]);	
			$v="select v.License_no,v.Company_name,v.Model_No,v.Type,v.Registration_No,v.Image, o.name 
			from vehicle as v,owner as o
			where v.License_no = '$eid' and o.License_no=v.License_no";			
			$r_v= mysqli_query($conn,$v);	
		}
	?>

<div class="body_wrap">
	<div class="header_top">
		<div class="container">
		
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>   
			<nav id="topmenu" class="clearfix">            
				<ul class="dropdown">    
                	<li class="menu-level-0"><a href="index.php"><span>Home</span></a>
					</li>
					<li class="menu-level-0 current-menu-ancestor "><a href="offers-search.php"><span>Search-Vehicle</span></a>
                    </li>
					<li class="menu-level-0 "><a href="offers-search-1.php"><span>Search-Owner</span></a>
                    </li>
                    <li class="menu-level-0"><a href="vehicle_registration_system.php"><span>Admin</span></a>
					</li>
				</ul>
			</nav>    
		</div>
	</div>
<div class="header header_thin" style="background-image:url(images/temp/slider_1_2.jpg)">
            
	<div class="header_title">
    	<h1><span>Access</span> our database if you have <span>License Number</span><h1>
    </div>

</div>
		<form name="form" onsubmit="return check();" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<center><B><i><h1><span> Enter License Number : </span></h1></i></b><input type="text" id="number" name="number"><br><br>
                 <span class="btn btn_search"><input type="submit" value="SEARCH" ></span>
            </center>
			<div id="dbcontent">
			</div>
		</form>
<div id="middle" class="cols2">
	<div class="container clearfix">  
        <div class="content">
	        <div class="list_manage">
	        </div>
			<div class="offer_list clearfix">
				
					<?php

					if ($r_v && mysqli_num_rows($r_v) >0)
					{
					while($row = mysqli_fetch_assoc($r_v))
					{
					?>
					<div class="offer_item clearfix">
                	<div class="offer_image"><a href="#"><img class="searchImage" src="Uploads/<?php if($row['Image']) echo $row['Image']; else echo 'default.jpg'; ?>" alt=""></a></div>
                    <div class="offer_aside">
					
                    	<h2><a href="#">License Number: <?php echo $row['License_no'];?></a></h2>
                    	<div class="offer_descr">
                        	<p>Owners Name: <?php echo $row['name'];?></p><BR>
							Company Name: <?php echo $row['Company_name'];?><BR>
							Model Name : <?php echo $row['Model_No'];?><BR>
							Type: <?php echo $row['Type'];?><BR>
                        </div>
						
                    </div>
                </div>
					<?php }
					}
					else if($eid==""){
											echo "Please Enter A Valid License No to <br> Search Car and Owner Details";
					}
					else{
					?>					
							<script>alert('Invalid License No');</script>
					<?php
											echo "Please Enter A Valid License No to <br> Search Car and Owner Details";	
					}?>
            </div> 
        </div>
            <div class="box_bot"></div>
            </div>
        </div>
    </div>
</div>
<div class="middle_row row_white brand_list">
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
            
            <a href="#" class="link_more">View All Popular Brands</a>
    </div>
</div>
<!--/ popular brands -->

<div class="footer">
	<div class="container clearfix">

        <div class="copyright">
            Designed By Pawan Kumar Rawat
        </div>

    </div>
</div>

</div>
</body>
</html>
