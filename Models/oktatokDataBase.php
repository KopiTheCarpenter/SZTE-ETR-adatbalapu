<?php
    include_once "connectDataBase.php";

    class Oktatok extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM OKTATOK";
            return oci_parse($this->connect(), $sql);
        }
    }