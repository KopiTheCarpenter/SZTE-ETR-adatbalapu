<?php
    include_once "connectDataBase.php";

    class Oktatok extends DataBase{
        function listAllDB(){
            $sql = "SELECT * FROM OKTATOK";
            return oci_parse($this->connect(), $sql);
        }

        function validate($usernameVar, $passwordVar){
            $sql = "SELECT * FROM OKTATOK WHERE OKTATASIAZON = $usernameVar AND JELSZO = '$passwordVar'";
            return oci_parse($this->connect(), $sql);
        }

        function listMyDatas(){
            $usrn = $_SESSION["username"];
            $passw = $_SESSION["password"];
            $sql = "SELECT * FROM OKTATOK WHERE OKTATASIAZON = $usrn AND JELSZO = '$passw'";
            return oci_parse($this->connect(), $sql);
        }

    }