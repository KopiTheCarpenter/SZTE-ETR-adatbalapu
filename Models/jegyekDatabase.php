<?php
    include_once "connectDataBase.php";

    class Jegyek extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM JEGYEK";
            return oci_parse($this->connect(), $sql);
        }
    }