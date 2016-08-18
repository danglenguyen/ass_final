<?php
include '../view/web/header.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	$id=1;	
}
?>
<div class="container">
	
	<!--price-->
	
	<!---->
	<div class="buy-single">
    		<h3>Residential Flats, Apartments</h3>
    		<div class="box-sin">
    			<div class="col-md-9 single-box">
                <?php
					$tintheoloai=new product();
					$display=2;
					if(isset($_GET['page']) && (int)$_GET['page']){
						$page=$_GET['page'];	
					}else{
						$count=$tintheoloai->CountProduct($Category);
						$record=$count[0];
						
						if($record > $display){
							$page = ceil($record/$display);	
						}else{
							$page=1;	
						}
					}
					
					$start=(isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;
					
					$result=$tintheoloai->getListPageOrderProduct($start,$display,$Category);
					$dem=0;
					while($set=$result->fetch()){
						$dem++;
				?>
    				<div class="box-col">
    				     <div class=" col-sm-7 left-side ">
    						 <a href="single.html"><img class="img-responsive" src="../view/web/images/<?php echo $set['ProductImage'] ?>" alt=""></a>
    					</div>				
    					<div class="  col-sm-5 middle-side">
    					     <h4><?php echo $set['ProductName'] ?></h4>
    					     <p>Số Phòng :<span class="two"><?php echo $set['NbRoom'] ?></span></p>
    					     <p>Giá :<span class="two"><?php echo $set['ProductPrice'] ?> VND</span></p>
    					     <p>Khu Vực : <span class="two"><?php echo $set['KhuVuc'] ?></span></p>
    					     <p>Loại Hình : <span class="two"><?php echo $set['IDLoaiHinh'] ?></span></p>
    						 <p><span class="bath4">Age of property</span> : <span class="two">4 - 10 Years</span></p>				 			
    						<div class="   right-side">
    							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>     
    						 </div>
    					 </div>
    				 <div class="clearfix"> </div>
    				</div>
                 <?php
				 	if($dem%4==0){
						echo "</div><div>";	
					}
					}
				 ?>
    			</div>
    		</div>
    		
    		<div class="clearfix"> </div>
    		<div class="nav-page">
                <nav>
               <?php 
            
            if($page > 1) { //hien thi so trang
                
                $next = $start + $display;
                $prev = $start - $display;
                $current = ($start/$display)+1;?>
                <center><table class="products_list_pages">
                        <tr>
                            <?php  //Hiển thị trang trước
                                if($current !=1) {
                                echo "<td><a href='index.php?action=$action&start=$prev&page=$page'>Previous</a></td>";
                                } ?>
                            
                            <?php //Hiển thị số link trang
                                for($i=1;$i<=$page;$i++) {
                                    if($current != $i) {
                                    echo "<td><a href='index.php?action=$action&start=".($display*($i-1))."&page=$page'>$i</a></td>";
                                } else {
                                    echo "<td class='current'>$i</td>";
                                }
                                } //kết thúc vòng lặp for
                               ?>
                            
                                <?php //Hiển thị trang kế tiếp

                                 if($current != $page) {
                                     echo "<td><a href='index.php?action=$action&start=$next&page=$page'>Next</a></td>";
                                 }

                                }
                                ?>
                        </tr>
                
                </table>
               </nav>
       		</div>
		</div>
</div>


<?php
include '../view/web/footer.php';
?>