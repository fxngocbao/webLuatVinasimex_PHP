<?php
    class licensefe{
        public function __construct(){
            
        }
        public function showlicense(){
            $db=new connect();
            $sql="select * from license";
            $result=$db->getList($sql);
            return $result;
        }
    }
?>