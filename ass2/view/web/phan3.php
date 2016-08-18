
<!--project--->
	<div class="project">
		<div class="container">
			<h3>Project Gallery</h3>
				<div class="project-top">
                <?php
                    $pro=new product();
                    $result=$pro->getList();
                    while($set=$result->fetch()){
                ?>
					<div class="col-md-3 project-grid" style="margin-bottom: 15px;">
						<div class="project-grid-top">
							 <a href="?action=products_details&id=<?php echo $set['ProductID'] ?>" class="mask"><img src="<?php echo '../view/web/images/'.$set['ProductImage']?>" class="img-responsive" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">								 
									 <div class="col-md4">
									 	<strong><?php echo $set['ProductName'] ?></strong>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p><?php echo $set['NbRoom'] ?></p>
								 <p class="cost"><?php echo number_format($set['ProductPrice'],0)?> VND</p>
								 <a href="?action=products_details&id=<?php echo $set['ProductID'] ?>" class="hvr-sweep-to-right more">Chi Tiet</a>
							 </div>
						</div>
					</div>
                    
                <?php
                    }
                ?>				               			
    		  </div>
    	   </div>
     </div>
<!--//project-->