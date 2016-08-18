<?php
	include'../view/admin/header_admin.php';
?>
<div class="login-right">
	<div class="container">
		<h3>Đăng ký cho thành viên trong admin</h3>
		<div class="login-top">
				<div class="form-info">
					<form>
						<input placeholder="Full Name" required="" type="text">
                        <input placeholder="UserName " required="" type="password">
						<input placeholder="Email Adress" required="" type="text">
						<input placeholder="Password " required="" type="password">
						<input placeholder="Password " required="" type="password">
                        <select name="permission" style="margin-bottom:10px;">
                        	<option value="admin">admin</option>
                        </select>
                        
                        <input type="text" name="address" placeholder="Address">
                        <input placeholder="Phone " required="" type="text" name="phone">
                        
						 <label class="hvr-sweep-to-right">
				           	<input value="Register" type="submit">
				           </label>
					</form>
					<p>Already have a Real Home account? <a href="login.html">Login</a></p>
				</div>
			
	</div>
</div>
</div>
<?php
	include'../view/admin/footer_admin.php';
?>