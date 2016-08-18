<?php
class product{
    function __construct(){}
    //Lay tat ca san pham co trong database
    function getList(){
        $db=new connect();
        $select="select * from products order by ProductID desc";
        $result=$db->getList($select);
        return $result;
    }
	function TinTheoLoaiTin($id){
		$db=new connect();
		$select="select * from products where IDLoaiHinh=$id";
		$result=$db->getList($select);
		return $result;	
	}
	
	
	
	function Show_slide(){
		$db=new connect();
		$select="select * from slide";	
		$result=$db->getList($select);
		return $result;
	}
	
	
	
	
	function CapNhapSoLanXemTin($id){
		$db = new connect();
		$select="update products SET Luotxem = Luotxem + 1 WHERE ProductID=$id";
		$result=$db->getInstance($select);
		return $result;	
	}
	function TinXemNhieu(){
        $db=new connect();
        $select="select * from products order by Luotxem desc limit 0,3";
        $result=$db->getList($select);
        return $result;
    }
	function getProById($id){
		$db=new connect();
		$select="select * from products where ProductID=$id";
		$result=$db->getInstance($select);
		return $result;	
	}
	function add_pro($tenbai,$tenanh,$gia,$tomtat,$trangthai,$phong,$noidung,$khuvuc){
		$db=new connect();
		$query="INSERT INTO `products`(`ProductName`, `ProductImage`, `ProductPrice`, `ProductDesc`, `IDLoaiHinh`, `NbRoom`, `ND`, `KhuVuc`) VALUES ('$tenbai','$tenanh','$gia','$tomtat','$trangthai','$phong','$noidung','$khuvuc')";	
		$db->exec($query);
		
	}
    function Deleteproduct($id)
         {
            $db = new connect();
            $query = "delete from products where ProductID = '$id'";
            $db->exec($query);
         }
	 function CountProduct($productname)
    {
        $db = new connect();
        $select = "select Count(*) from products WHERE IDLoaiHinh='$productname'";
        $result = $db->getInstance($select);
        return $result; 
    }
	function getListPageOrderProduct($from,$to,$category)
     {
         $db = new connect();
         $select = "select * from products WHERE IDLoaiHinh='$category' ORDER BY ProductID DESC limit $from,$to";
         $result = $db->getList($select);
         return $result;
     }
}

?>