<?php
    include_once "connectDataBase.php";

    class Penzugy extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM PENZUGY";
            return oci_parse($this->connect(), $sql);
        }
    }