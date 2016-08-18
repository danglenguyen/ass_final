<?php
include'../../admin/view/admin/header_admin.php';
if(isset($_GET['id']))
	$id=$_GET['id'];	

?>
<div class="container">
    <div class="col-lg-12">
        <h1 class="page-header">Đăng Bài</h1>
    </div>
    <div class="row" style="margin:25px 0 25px 0 ">
                                <div class="col-md-5">
                                    <form role="form" action="../../admin/sllide/?action=insertPR_action" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên bài đăng : </label>
                                            <input type="text" name="txttenbai" class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="anhminhhoa" />
                                        </div>
                                        <div class="form-group">
                                            <label>Giá : </label>
                                            <input type="text" name="txtgia" class="form-control">
                                            <p class="help-block">Tất cả đều bắt buộc viết bằng số không được viết bằng số và chữ hoặc chữ</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Tóm tắt : </label>
                                            <input type="text" name="txttomtat" class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Loại hình : </label>
                                            <select name="trangthai">
                                            	<?php
												$loaihinh=new loaihinh();
												$result=$loaihinh->showLH();
												while($set=$result->fetch()){
												?>
                                            	<option value="<?php echo $set['IDLoaiHinh'] ?>"><?php echo $set['TenLoaiHinh'] ?></option>
                                                <?php
												}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Phòng : </label>
                                            <input type="text" name="txtphong" class="form-control">
                                            <p class="help-block">Bao nhiêu phòng và diện tích</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea name="txtnoidung" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Khu vực : </label>
                                            <input type="text" name="txtkhuvuc" class="form-control">
                                            <p class="help-block">Thông tin chi tiết về địa chỉ</p>
                                        </div>
                                        
                                        
                                        <input type="submit" class="btn btn-default" value="Đăng bài" />
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div> 
								
								 <div class="col-md-7">
									<div class="row col-md-10 col-md-offset-2 custyle">
										<table class="table table-striped custab">
											<thead>
												<tr>
													<th>ID</th>
													<th>Title</th>
													<th>Trạng thái</th>
													<th class="text-center">Action</th>
												</tr>
											</thead>
											<?php
												$lietkePR=new slide_QC();
												$result=$lietkePR->slideQC();
												while($set=$result->fetch()){
											?>
													<tr>
														<td>
															<img src="<?php echo $set['Url'] ?>" width="100" height="100">
                                                        </td>
														<td><?php echo $set['Title'] ?></td>
														<td><?php echo $set['Slogan'] ?></td>
														<td class="text-center"><a class='btn btn-info btn-xs' href="../../admin/sllide/?action=updateLH"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                                        <a href="../../admin/sllide/?action=deletePR_action&id=<?php echo $set['ProductID'] ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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
include'../../admin/view/admin/footer_admin.php';
?>