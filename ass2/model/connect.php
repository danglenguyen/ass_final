<?php
class connect{
    var $db=null;
    public function __construct(){
        $dsn="mysql:host=localhost;dbname=batdongsan";
        $user="root";
        $pass="";
        $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    }
    // lay tat ca ket qua trong database
    public function getList($select){
        $results=$this->db->query($select);
        return $results;
    }
    // lay 1 ket qua trong bang
    public function getInstance($select){
        $results=$this->db->query($select);
        $result=$results->fetch();
        return $result;
    }
	public function exec($query){
			$result=$this->db->exec($query);
			return $result;
	}
}

?>