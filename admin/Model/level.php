<?php
    class level{
        public function __construct(){

        }
        public function levelAll(){
            $db=new connect();
            $sql="select * from level";
            $result=$db->getList($sql);
            return $result;
        }
        public function getlevelID($id){
            $db=new connect();
            $sql="select * from level where level_id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insertlevel($level_name){
            $db=new connect();
            $sql="insert into level(level_id,level_name) values (NULL,'$level_name')";
            $result=$db->exec($sql);
            return $result;
        }
        public function updatelevel($id,$level_name){
            $db=new connect();
            $sql="update level set level_name='$level_name' where level_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function deletelevel($id){
            $db=new connect();
            $sql="delete from level where level_id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>