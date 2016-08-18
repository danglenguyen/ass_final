<?php
include '../view/admin/headerlg_admin.php';
?>
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Login</h3>
		<div class="login-top">
				<div class="form-info">
					<form action="?action=login_action" method="post">                        
						<input type="text" class="text" name="txtusername" value="" placeholder="Username" required="">
						<input type="password" name="txtpassword" value=""  placeholder="Password" required="">
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Submit">
				           </label>
					</form>
				</div>
			<div class="create">
				<h4>New To Real Home?</h4>
				<a class="hvr-sweep-to-right" href="register.html">Create an Account</a>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
</div>
<!--//contact-->
<?php
include '../view/web/footer.php';
?>