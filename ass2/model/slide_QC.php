<?php
	class slide_QC{
		function slideQC(){
			$db=new connect();
			$select="select * from slide_QC";
			$result=$db->getList($select);
			return $result;	
		}
		function insesrtSL($anhsl,$tensl,$tenslo){
			$db=new connect();
			$query="INSERT INTO `slide_qc`(`Url`, `Title`, `Slogan`) VALUES ('$anhsl','$tensl','$tenslo')";
			$result=$db->exec($query);
			return $result;	
		}
	}
?>