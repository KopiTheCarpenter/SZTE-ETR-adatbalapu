<?php
    include_once "connectDataBase.php";

    class Tanit extends DataBase{
        protected function listAllDB(){
            $sql = "SELECT * FROM TANIT";
            return oci_parse($this->connect(), $sql);
        }
    }