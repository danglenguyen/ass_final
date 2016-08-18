<?php
class customer{
    public function __construct(){}
    public function checkUser($username,$password){
        $db=new connect();
        $select="select * from users where Username='$username' and Password='$password'";
        $result=$db->getInstance($select);
        if($result!=null){
            return true;
        }else{
            return false;
        }
    }
    public function userid($username,$password){
        $db=new connect();
        $select="select UserID from users where Username='$username' and Password='$password'";
        $result=$db->getInstance($select);
        return $result;
    }
}

?>