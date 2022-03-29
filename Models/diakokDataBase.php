<?php
    include_once "connectDataBase.php";

    class Diakok extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM DIAKOK";
            return oci_parse($this->connect(), $sql);
        }

        function validate($usernameVar, $passwordVar){
            $sql = "SELECT * FROM DIAKOK WHERE OKTATASIAZON = $usernameVar AND JELSZO = '$passwordVar'";
            return oci_parse($this->connect(), $sql);
        }

        function listMyDatas(){
            $usrn = $_SESSION["username"];
            $passw = $_SESSION["password"];
            $sql = "SELECT * FROM DIAKOK WHERE OKTATASIAZON = $usrn AND JELSZO = '$passw'";
            return oci_parse($this->connect(), $sql);
        }
    }