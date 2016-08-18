<?php
include '../model/connect.php';
include '../model/user.php';
include '../model/customer.php';
include '../model/products.php';
include '../model/loaihinh.php';
include '../model/slide_QC.php';

session_start();

if(isset($_GET['action'])){
    $action=$_GET['action'];
}elseif(isset($_POST['action'])){
    $action=$_POST['action'];
}else{
    $action='home';
}
//Xуa d? li?u c?a bi?n Messages
unset($_SESSION['messages']);
switch($action){
    case 'home':
        include '../view/web/home.php';
        break;
    
    case 'login':
        include '../view/web/login.php';
        break;
    case 'login_action':
        $username=$_POST['txtusername'];
        $_SESSION['username']=$username;
        $password=$_POST['txtpassword'];
        $_SESSION['password']=$password;
        
        $user=new customer();
        
        if($username="" ||$password=""){
            $_SESSION['messages']='B?n c?n nh?p р?y р? thфng tin';
            include '../view/web/login.php';
            break;
        }else{
            if($user->checkUser($username,$password)){
                $result=$user->userid($username,$password);
                $userid=$result[0];
                $_SESSION['check']=$username;
                header('location:./index.php');
                break;
            }else{
                $_SESSION['messages']='Tаi kho?ng ho?c m?t kh?u chэa ръng';
                include '../view/web/login.php';
                break;
            }
        }
    case 'products_details':
        include '../view/web/chitiet.php';
        break;       
    case 'chitiet':
        include '../view/web/chitiet.php';
        break;
    case 'contact':
        include '../view/web/contact.php';
        break;
    case 'dealers':
        include '../view/web/dealers.php';
        break;
    case 'register':
        include '../view/web/register.php';
        break;
    case 'canho':
		$action='canho';
		$Category="1";
        include '../view/web/buy.php';
        break;
	case 'nhao':
		$action='nhao';
		$Category="2";
        include '../view/web/buy.php';
        break;
	case 'nhathue':
		$action='nhathue';
		$Category="3";
        include '../view/web/buy.php';
        break;
}
?>