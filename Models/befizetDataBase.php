<?php
    include_once "connectDataBase.php";

    class Befizet extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM BEFIZET";
            return oci_parse($this->connect(), $sql);
        }
    }