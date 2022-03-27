<?php
    include_once "connectDataBase.php";

    class Diakok extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM DIAKOK";
            return oci_parse($this->connect(), $sql);
        }
    }