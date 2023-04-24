<?php
// license: giấy phép
   class license{
        public function __construct(){

        }
        public function licenseAll(){
            $db=new connect();
            $sql="select * from license";
            $result=$db->getList($sql);
            return $result;
        }
        public function getGpId($id){
            $db=new connect();
            $sql="select * from license where gp_id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insertlicense($gp_name,$gp_disc,$gp_phone,$gp_email,$image){
            $db=new connect();
            $sql="insert into license(gp_id,gp_name,gp_disc,gp_phone,gp_email,image)
            values(NULL,'$gp_name','$gp_disc','$gp_phone','$gp_email','$image')";
            $result=$db->exec($sql);
            return $result;
        }
        public function updatelicense($id,$gp_name,$gp_disc,$gp_phone,$gp_email,$image){
            $db=new connect();
            $sql="update license set
            gp_name='$gp_name',
            gp_disc='$gp_disc',
            gp_phone='$gp_phone',
            gp_email='$gp_email',
            image='$image'
            where gp_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function deletelicense($id){
            $db=new connect();
            $sql="delete from license where gp_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
   }
?>