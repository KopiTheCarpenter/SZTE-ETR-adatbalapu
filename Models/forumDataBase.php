<?php
    include_once "connectDataBase.php";

    class Forum extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM FORUM";
            return oci_parse($this->connect(), $sql);
        }
    }