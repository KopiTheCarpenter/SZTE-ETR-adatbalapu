<?php
    include_once "connectDataBase.php";

    class Tantargyak extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM TANTARGYAK";
            return oci_parse($this->connect(), $sql);
        }
    }