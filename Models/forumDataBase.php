<?php
    include_once "connectDataBase.php";

    class Forum extends DataBase{
        protected function listAllDB(){
            $sql = "SELECT * FROM FORUM";
            return oci_parse($this->connect(), $sql);
        }

        protected function newNews($string){
            $sql = "INSERT INTO FORUM (BEJEGYZESID, MIT, MIKOR) SELECT MAX(BEJEGYZESID)+1, '$string', CURRENT_DATE FROM FORUM";
            $stmt = oci_parse($this->connect(), $sql);
            oci_execute($stmt);
            oci_commit($this->connect());
        }
    }