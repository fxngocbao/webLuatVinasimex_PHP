<?php
    class information{
        public function __construct(){

        }
        public function In4All(){
            $db=new connect();
            $sql="select * from information";
            $result=$db->getList($sql);
            return $result;
        }
        public function getIn4Id($id){
            $db=new connect();
            $sql="select * from information where in4_id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insertIn4($in4_name,$level_name,$in4_phone,$in4_email,$image){
            $db=new connect();
            $sql="insert into information(in4_id,in4_name,level_name,in4_phone,in4_email,image)
                values (NULL,'$in4_name','$level_name',$in4_phone,'$in4_email','$image')";
            $result=$db->exec($sql);
            return $result;
        }
        public function updateIn4($id,$in4_name,$level_id,$in4_phone,$in4_email,$image){
            $db=new connect();
            $sql="update information set
                in4_name='$in4_name',
                level_id=$level_id,
                in4_phone=$in4_phone,
                in4_email='$in4_email',
                image='$image' 
                where in4_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function deleteIn4($id){
            $db=new connect();
            $sql="delete from information where in4_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>