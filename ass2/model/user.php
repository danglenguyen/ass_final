<?php
class user{
    // phuong thuc lay danh sach user
    function getUser(){
        $db=new connect();
        $select="select * from users";
        return $db->getList($select);
    }
    //Phuong thuc lay thong tin tai khoan dang nhap
    function getInfoById($username){
        $db=new connect();
        $select="select * from users where Username='$username'";
        $result=$db->getList($select);
        $quest=$result->fetch();
        return $quest;
    }
}
?>