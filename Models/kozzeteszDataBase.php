<?php
    include_once "connectDataBase.php";

    class Kozzetesz extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM KOZZETESZ";
            return oci_parse($this->connect(), $sql);
        }
    }