<?php
    include_once "connectDataBase.php";

    class Hianyzik extends DataBase{
        protected function listAllDB(){
            $sql = "SELECT * FROM HIANYZIK";
            return oci_parse($this->connect(), $sql);
        }
    }