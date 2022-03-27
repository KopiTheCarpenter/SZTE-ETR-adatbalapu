<?php
    include_once "connectDataBase.php";

    class Osztalyok extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM OSZTALYOK";
            return oci_parse($this->connect(), $sql);
        }
    }