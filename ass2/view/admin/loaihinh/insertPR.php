<?php
include'../view/admin/header_admin.php';
?>
<div class="container">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM LOẠI HÌNH</h1>
    </div>
    <div class="row" style="margin:25px 0 25px 0 ">
         <div class="col-md-5">
              <form role="form" action="?action=insertLH_action" method="post">
                    <div class="form-group">
                         <label>Tên Loại Hình</label>
                         <input class="form-control" name="txttenloaihinh">                                           
                    </div>  
                    <div class="form-group">  
                         <label>Trạng Thái : </label>                                                     
                         <select name="trangthai" id="trangthai">
                            <option value="Hiển thị" selected>Hiển thị</option>
                            <option value="Không hiển thị">Không hiển thị</option>
                         </select>
                    </div>
                    <input type="submit" class="btn btn-default" value="Thêm Loại Hình" />
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
						$lietkeLH=new loaihinh();
						$result=$lietkeLH->LietKeLH();
						while($set=$result->fetch()){
					?>
                            <tr>
                                <td><?php echo $set['IDLoaiHinh'] ?></td>
                                <td><?php echo $set['TenLoaiHinh'] ?></td>
                                <td><?php echo $set['TrangThai'] ?></td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="?action=updateLH"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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