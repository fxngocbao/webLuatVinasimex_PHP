<?php
    class doanhnghiep{
        public function construct(){

        }
        public function DnAll(){
            $db=new connect();
            $sql="select * from doanhnghiep";
            $result=$db->getList($sql);
            return $result;
        }
        public function getDnId($id){
            $db=new connect();
            $sql="select * from doanhnghiep where dn_id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insertDN($dn_name,$dn_disc,$dn_phone,$dn_email,$image,$link){
            $db=new connect();
            $sql="insert into doanhnghiep(dn_id,dn_name,dn_disc,dn_phone,dn_email,image,link)
            values(NULL,'$dn_name','$dn_disc','$dn_phone','$dn_email','$image','$link')";
            $result=$db->exec($sql);
            return $result;
        }
        public function deleteDn($id){
            $db=new connect();
            $sql="delete from doanhnghiep where dn_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>