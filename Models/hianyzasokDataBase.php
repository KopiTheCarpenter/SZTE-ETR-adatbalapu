<?php
    include_once "connectDataBase.php";

    class Hianyzasok extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM HIANYZASOK";
            return oci_parse($this->connect(), $sql);
        }
    }