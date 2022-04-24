<?php
    include_once "connectDataBase.php";

    class Jegyek extends DataBase{
        protected function listAllDegrees(){
            $usrn = $_SESSION["username"];
            $sql = "SELECT DIAKOK.*, JEGYEK.HONAP, JEGYEK.JEGY, TANTARGYAK.NEV FROM JEGYETBEIR 
                            INNER JOIN DIAKOK ON JEGYETBEIR.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                            INNER JOIN JEGYEK ON JEGYETBEIR.BEJEGYZESID = JEGYEK.BEJEGYZESID
                            INNER JOIN OKTATOK ON JEGYETBEIR.OOKTATASIAZON = OKTATOK.OKTATASIAZON 
                            INNER JOIN TANTARGYAK ON JEGYETBEIR.TANTARGYID = TANTARGYAK.TANTARGYID 
                        WHERE DIAKOK.OKTATASIAZON = $usrn";
            return oci_parse($this->connect(), $sql);
        }
    }