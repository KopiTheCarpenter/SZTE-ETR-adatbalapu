<?php
    include_once "connectDataBase.php";

    class Osztalybajar extends DataBase{
        protected function listAllDB(){
            $sql = "SELECT * FROM OSZTALYBAJAR";
            return oci_parse($this->connect(), $sql);
        }
    }