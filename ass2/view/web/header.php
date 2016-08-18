<!DOCTYPE html>
<html>
<head>
<title>Real Home A Real Estate Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="../view/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../view/web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="../view/web/js/scripts.js"></script>
<link href="../view/web/css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="../view/web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- slide -->
<script src="../view/web/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body >


<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="?action=home">HOME</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">       
				<li><a  href="?action=canho">Căn Hộ</a></li>
                <li><a  href="?action=nhao">Nhà Ở</a></li>
                <li><a  href="?action=nhathue">Nhà Thuê</a></li>				
			</ul>
			
		<div class="clearfix"> </div>
			
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">
                  <?php
				  	$slide=new slide_QC();
					$reuslt=$slide->slideQC();
					while($set=$reuslt->fetch()){
				  ?>		       
					 <li>
			          	 <div class="banner">
                         	<img src="../view/web/images/<?php echo $set['Url'] ?>">
			           		<div class="caption">
					          	<h3><span><?php echo $set['Title'] ?></span></h3>
					          	<p><?php echo $set['Slogan'] ?></p>
			          		</div>
			          	</div>
			         </li>
				<?php	 
					}
				?>		
			      </ul>
			  </div>
			</div>
		</div>
	</div>	
	
	
	
<!--//header-->