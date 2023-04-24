<?php
    class informationfe{
        public function __construct(){

        }
        public function showIn4(){
            $db=new connect();
            $sql="select * from information";
            $result=$db->getList($sql);
            return $result;
        }
    }
?>