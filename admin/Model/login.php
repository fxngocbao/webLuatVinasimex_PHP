<?php
class login{
    public function __construct()
    {
        
    }
    // phương thức loginadmin
    public function logAdmin($user,$pass)
    {
        $db=new connect();
        $select="select * from admin where admin_user='$user' and admin_password='$pass'";
        // echo $select;
        $result=$db->getInstance($select);
        return $result;
        // $result=$db->getList($select);
        // $set=$result->fetch(); // $set[admin,123456]
        // return $set;
    }
}
?>