<?php
    class thanhlapdoanhnghiep{
        public function __construct(){

        }
        public function TLDNAll(){
            $db=new connect();
            $sql="select * from bvlienquan_tldn";
            $result=$db->getList($sql);
            return $result;
        }
        public function getTLDNId($id){
            $db=new connect();
            $sql="select * from bvlienquan_tldn where dn_id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insertTLDN($tldn_name,$tldn_disc,$link){
            $db=new connect();
            $sql="insert into bvlienquan_tldn(tldn_id,tldn_name,tldn_disc,link)
            values (NULL,'$tldn_name','$tldn_disc','$link')";
            $result=$db->exec($sql);
            return $result;
        }
        public function deleteTLDN($id){
            $db=new connect();
            $sql="delete from bvlienquan_tldn where tldn_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>