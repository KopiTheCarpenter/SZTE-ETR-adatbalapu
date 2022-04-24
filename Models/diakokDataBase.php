<?php
    include_once "connectDataBase.php";

    class Diakok extends DataBase{
        protected function listAllDB(){
            $sql = "SELECT DIAKOK.*, OSZTALYOK.MEGNEVEZES FROM OSZTALYBAJAR 
                            INNER JOIN DIAKOK ON OSZTALYBAJAR.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                            INNER JOIN OSZTALYOK ON OSZTALYBAJAR.OSZTALYID = OSZTALYOK.OSZTALYID";
            return oci_parse($this->connect(), $sql);
        }

        protected function validate($usernameVar, $passwordVar){
            $sql = "SELECT * FROM DIAKOK WHERE OKTATASIAZON = $usernameVar AND JELSZO = '$passwordVar'";
            return oci_parse($this->connect(), $sql);
        }

        protected function listMyDatas(){
            $usrn = $_SESSION["username"];
            $passw = $_SESSION["password"];
            $sql = "SELECT DIAKOK.*, OSZTALYOK.MEGNEVEZES FROM OSZTALYBAJAR 
                            INNER JOIN DIAKOK ON OSZTALYBAJAR.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                            INNER JOIN OSZTALYOK ON OSZTALYBAJAR.OSZTALYID = OSZTALYOK.OSZTALYID
                        WHERE OKTATASIAZON = $usrn AND JELSZO = '$passw'";
            return oci_parse($this->connect(), $sql);
        }
    }