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
    $action='login';
}


switch($action){
    case'home':
        include '../view/admin/home_admin.php';
        break;
    case'login':
        include'../view/admin/login_admin.php';
        break;
    case'login_action':
        $username=$_POST['txtusername'];
        $_SESSION['username']=$username;
        $password=$_POST['txtpassword'];
        $_SESSION['password']=$password;
        
        $user=new customer();
        $result=$user->userid($username,$password);
        $userid=$result[0];
        $cus=new user();
        $result=$cus->getInfoById($username);
        if($set=$result){
            $permissions=$set['Permissions'];
            if($permissions="admin"){
                // Toa mac dinh bien session cho nguoi dung dang nhap thanh cong
                $_SESSION['admin']=$userid;
                include '../view/admin/home_admin.php';
                break;
            }else{
                include'../view/admin/login_admin.php';
                break;
            }
        }else{
            include'../view/admin/login_admin.php';
            echo "<center><h1>Tên ðãng nh?p không t?n t?i !</h1>";
            echo "<a href='index.php?action=home'>Tr? v? trang ch?</a>";
            echo "</center>";
        }
    case'register':
		include'../view/admin/register.php';
		break;    
    case'insertLH':
        include'../view/admin/loaihinh/insertPR.php';
        break;
	case'insertLH_action':
		$tenloaihinh=$_POST['txttenloaihinh'];
		$trangthai=$_POST['trangthai'];   
        
			$loaihinh=new loaihinh();
			$result=$loaihinh->insertLH($tenloaihinh,$trangthai);
			header("location:admin.php?action=insertSP");
			break;
		
    case'updateLH':	    
        include'../view/admin/loaihinh/updateLH.php';
        break;
	case'dalete_LH':	    
        include'../view/admin/loaihinh/updateLH.php';
        break;
    
	
	case'insert_PR':	    
        include'../view/admin/dangbai/insert_pro.php';
        break;
	case'insertPR_action':
		$tenbai=$_POST['txttenbai'];
		$tenanh=$_FILES['anhminhhoa']['name'];
		$gia=$_POST['txtgia'];
		$tomtat=$_POST['txttomtat'];
		$trangthai=$_POST['trangthai'];
		$phong=$_POST['txtphong'];
		$noidung=$_POST['txtnoidung'];	
		$khuvuc=$_POST['txtkhuvuc'];	
		
		move_uploaded_file($_FILES["anhminhhoa"]["tmp_name"],"../view/web/images/" . $_FILES["anhminhhoa"]["name"]);
		$SP=new product();
		$SP->add_pro($tenbai,$tenanh,$gia,$tomtat,$trangthai,$phong,$noidung,$khuvuc);
		header('location:admin.php?action=insert_PR');		
		break;
		
     case'deletePR_action':
	 	$id=$_GET['id'];
	 	$daletepr=new product();
		$daletepr->Deleteproduct($id);
		header('location:admin.php?action=insert_PR');
		break;   
        
     case'slide':
	 	include'../view/admin/slide/Themslide.php';
		break;  
	case'insertSL':
		$tensl=$_POST['txttensl'];
		$anhsl=$_FILES['anhminhhoa']['name'];
		$tenslo=$_POST['txtslo']; 
		
		move_uploaded_file($_FILES['anhminhhoa']['tmp_name'],"../view/web/images/" . $_FILES['anhminhhoa']['name']);
		$SL=new slide_QC();
		$SL->insesrtSL($anhsl,$tensl,$tenslo);
		header('location:admin.php?action=slide');
		break;
	
	
}
?>