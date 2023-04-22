<?php
    class thongtin{
        public function __constructs(){

        }
        function insertPosition($use_name,$level,$user_phone,$user_email,$image){
            $db=new connect();
            $sql="insert into user(user_id,user_name,level,user_phone,user_email) 
                     values (NULL,'$user_name','$level',$user_phone,'$user_email','$image)";
            $result=$db->exec($sql);
            return $result;
        }
        function getAllPosition(){
            $db=new connect();
            $sql="select * from user";
            $result=$db->getList($sql);
            return $result;
        }
    }
?>