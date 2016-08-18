<?php
include '../view/web/header.php';
?>
<?php
if(isset($_SESSION['check'])){
    echo 'khong tim thay yeu cau';
}else{
    if(empty($_SESSION['messages'])){
        $messages="";
    }else{
       $messages=$_SESSION['messages']; 
    }
    if((isset($_COOKIE['user']) && (isset($_COOKIE['pass'])))){
        $user=$_COOKIE['user'];
        $pass=$_COOKIE['pass'];
    }else{
        $user="";
        $pass="";
    }
}
?>
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Login</h3>
		<div class="login-top">
				<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="form-info">
					<form action="?action=login_action" method="post">
                        <div>
                            <p><?php echo "$messages" ?></p>
                        </div>
						<input type="text" class="text" name="txtusername" value="<?php echo "$user" ?>" placeholder="Username" required="">
						<input type="password" name="txtpassword" value="<?php echo "$pass" ?>"  placeholder="Password" required="">
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