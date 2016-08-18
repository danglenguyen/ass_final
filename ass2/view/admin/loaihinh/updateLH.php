<?php
include'../view/admin/header_admin.php';
?>
<div class="container">
    <div class="col-lg-12">
        <h1 class="page-header">SỬA LOẠI HÌNH</h1>
    </div>
    <div class="row" style="margin:25px 0 25px 0 ">
         <div class="col-md-5">
              <form role="form">
                    <div class="form-group">
                         <label>Tên Loại Hình</label>
                         <input class="form-control">                                           
                    </div>  
                    <div class="form-group">  
                         <label>Trạng Thái : </label>                                                     
                         <select name="trangthai" id="trangthai">
                            <option value="Hiển thị" selected>Hiển thị</option>
                            <option value="Không hiển thị">Không hiển thị</option>
                         </select>
                    </div>
                    <input type="submit" class="btn btn-default" value="Sửa Loại Hình" />
                    <button type="reset" class="btn btn-default">Reset Button</button>
              </form>
         </div>
                                                       
    </div>                  
</div>
<?php
include'../view/admin/footer_admin.php';
?>