<?php
include '../view/web/header.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];	
}else{
	$id=1;	
}
$capnhap=new product();
$capnhanews=$capnhap->CapNhapSoLanXemTin($id);
?>
<div class="container">
<div class="buy-single-single">
	
			<div class="col-md-9 single-box">
				
       <div class=" buying-top">	
			<div class="flexslider">
              <ul class="slides">
                <li data-thumb="../view/web/images/ss.jpg">
                  <img src="../view/web/images/ss.jpg" />
                </li>
                <li data-thumb="../view/web/images/ss1.jpg">
                  <img src="../view/web/images/ss1.jpg" />
                </li>
                <li data-thumb="../view/web/images/ss2.jpg">
                  <img src="../view/web/images/ss2.jpg" />
                </li>
                <li data-thumb="../view/web/images/ss3.jpg">
                  <img src="../view/web/images/ss3.jpg" />
                </li>
              </ul>
            </div>
            <!-- FlexSlider -->
              <script defer src="../view/web/js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="../view/web/css/flexslider.css" type="text/css" media="screen" />
            
            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
      </div>
      <?php
	  		$single=new product();
			$result=$single->getProById($id);
	  ?>
<div class="buy-sin-single">
			<div class="col-sm-5 middle-side immediate">
					     <h4>Thông tin về phòng</h4>
					     <p>Số Phòng :<span class="two"><?php echo $result['NbRoom'] ?></span></p>
					     <p>Khu Vực :<span class="two"><?php echo $result['KhuVuc'] ?></span></p>					     
						 <p>Giá :<span class="two"><?php echo $result['ProductPrice']?>VND</span></p>				 
						<div class="   right-side">
							 <a href="?action=contact" class="hvr-sweep-to-right more" >Contact Builder</a>     
					 </div>
					</div>
					 <div class="col-sm-7 buy-sin">
					 	<h4>Nội Dung</h4>
					 	<p><?php echo $result['ND'] ?></p>
					 	
					 </div>
					 <div class="clearfix"> </div>
					</div>				 
					
		</div>
	

			
		
		<div class="col-md-3">
			<div class="single-box-right right-immediate">
		     	<h4>Tin xem nhiều</h4>
                <?php
					$tinlienquan=new product();
					$result=$tinlienquan->TinXemNhieu();
					while($set=$result->fetch()){
				?>
				<div class="single-box-img ">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="../view/web/images/<?php echo $set['ProductImage'] ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html"><?php echo $set['ProductName'] ?></a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
                <?php
					}
				?>										
		 </div>
			
	  </div>
		<div class="clearfix"> </div>
		</div>
	</div>

<!---->
</div>
<div class="container">

</div>
<?php
include '../view/web/footer.php';
?>