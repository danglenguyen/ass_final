<?php
include'../view/admin/header_admin.php';
if(isset($_GET['id']))
	$id=$_GET['id'];	

?>
<div class="container">
    <div class="col-lg-12">
        <h1 class="page-header">Đăng Bài</h1>
    </div>
    <div class="row" style="margin:25px 0 25px 0 ">
                                <div class="col-md-5">
                                    <form role="form" action="?action=insertSL" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên bài đăng : </label>
                                            <input type="text" name="txttensl" class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="anhminhhoa" />
                                        </div>
                                        <div class="form-group">
                                            <label>Slogan : </label>
                                            <input type="text" name="txtslo" class="form-control" placeholder="Enter text">
                                        </div>                        
                                        
                                        
                                        <input type="submit" class="btn btn-default" value="Thêm Slide" />
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div> 
								
								 <div class="col-md-7">
									<div class="row col-md-10 col-md-offset-2 custyle">
										<table class="table table-striped custab">
											<thead>
												<tr>
													<th>Url</th>
													<th>Title</th>
													<th>Slogan</th>
													<th class="text-center">Action</th>
												</tr>
											</thead>
											<?php
												$lietkePR=new slide_QC();
												$result=$lietkePR->slideQC();
												while($set=$result->fetch()){
											?>
													<tr>
														<td><img src="../view/web/images/<?php echo $set['Url'] ?>" width="100" height="100"></td>
														<td><?php echo $set['Title'] ?></td>
														<td><?php echo $set['Slogan'] ?></td>
														<td class="text-center"><a class='btn btn-info btn-xs' href="../sllide/?action=updateLH"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                                        <a href="../sllide/?action=deletePR_action&amp;id=<?php echo $set['ProductID'] ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
													</tr> 
											<?php
												}
											?>                   
										</table>
									</div>       
								</div>                              
                                               
    </div>                  
</div>
<?php
include'../view/admin/footer_admin.php';
?>