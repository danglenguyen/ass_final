<?php
	class loaihinh{
		public function menu(){
			$db=new connect();
			$select="select * from LoaiHinh";
			$result=$db->getList($select);
			return $result;	
		}
		public function TinTheoLoaiTin($id){
			$db=new connect();
			$select="select * from products where IDLoaiHinh=$id";
			$result=$db->getList($select);
			return $result;	
		}
		public function LietKeLH(){
			$db=new connect();
			$select="select * from loaihinh";
			$result=$db->getList($select);
			return $result;	
		}
		public function insertLH($tenloaihinh,$trangthai){
			$db=new connect();
			$query="INSERT INTO `loaihinh`(`TenLoaiHinh`, `TrangThai`) VALUES ('$tenloaihinh','$trangthai')";	
			$result=$db->exec($query);
			return $result;
		}
		public function showLH(){
			$db=new connect();
			$select="select * from loaihinh";
			$result=$db->getList($select);
			return $result;	
		}
	}
?>