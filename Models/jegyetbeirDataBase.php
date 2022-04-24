<?php
    include_once "connectDataBase.php";

    class Jegyetbeir extends DataBase{
        protected function listAllDB(){
            $sql = "SELECT * FROM JEGYETBEIR";
            return oci_parse($this->connect(), $sql);
        }
    }