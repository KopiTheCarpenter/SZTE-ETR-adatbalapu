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

        protected function chooseStudent($postHonap, $postOktatasiazon, $postTargynev){
            $sql = "SELECT DIAKOK.*, JEGYEK.HONAP, JEGYEK.JEGY, TANTARGYAK.NEV AS tantargynev FROM JEGYETBEIR 
                            INNER JOIN DIAKOK ON JEGYETBEIR.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                            INNER JOIN JEGYEK ON JEGYETBEIR.BEJEGYZESID = JEGYEK.BEJEGYZESID
                            INNER JOIN OKTATOK ON JEGYETBEIR.OOKTATASIAZON = OKTATOK.OKTATASIAZON 
                            INNER JOIN TANTARGYAK ON JEGYETBEIR.TANTARGYID = TANTARGYAK.TANTARGYID
                        WHERE JEGYEK.HONAP = '$postHonap' AND 
                                DIAKOK.OKTATASIAZON = $postOktatasiazon AND 
                                TANTARGYAK.NEV = '$postTargynev'";
            return oci_parse($this->connect(), $sql);
        }

        protected function getMonths(){
            $sql = "SELECT * FROM JEGYEK";
            return oci_parse($this->connect(), $sql);
        }

        protected function getStudents(){
            $sql = "SELECT * FROM DIAKOK";
            return oci_parse($this->connect(), $sql);
        }

        protected function getClasses(){
            $sql = "SELECT * FROM TANTARGYAK";
            return oci_parse($this->connect(), $sql);
        }

        protected function getDatas(){
            $sql = "SELECT DIAKOK.*, JEGYEK.HONAP, JEGYEK.JEGY, TANTARGYAK.NEV AS tantargynev FROM JEGYETBEIR 
                            INNER JOIN DIAKOK ON JEGYETBEIR.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                            INNER JOIN JEGYEK ON JEGYETBEIR.BEJEGYZESID = JEGYEK.BEJEGYZESID
                            INNER JOIN OKTATOK ON JEGYETBEIR.OOKTATASIAZON = OKTATOK.OKTATASIAZON 
                            INNER JOIN TANTARGYAK ON JEGYETBEIR.TANTARGYID = TANTARGYAK.TANTARGYID";
            return oci_parse($this->connect(), $sql);
        }

        protected function create($ertek, $honap){
            $sql = "INSERT INTO JEGYEK(BEJEGYZESID, HONAP, JEGY) SELECT MAX(BEJEGYZESID)+1, '$honap', $ertek FROM JEGYEK";
            $stmt = oci_parse($this->connect(), $sql);
            oci_execute($stmt);
            oci_commit($this->connect());
        }

        protected function helpingQueryTantargyID($tantargynev){
            $sql = "SELECT TANTARGYID FROM TANTARGYAK WHERE NEV = '$tantargynev'";
            return oci_parse($this->connect(), $sql);
        }

        protected function createdBy($oktatasiazon, $tantargyid){
            $usrn = $_SESSION["username"];
            $sql = "INSERT INTO JEGYETBEIR(OOKTATASIAZON, DOKTATASIAZON, BEJEGYZESID, TANTARGYID) SELECT $usrn, $oktatasiazon, MAX(BEJEGYZESID), $tantargyid FROM JEGYEK";
            $stmt = oci_parse($this->connect(), $sql);
            oci_execute($stmt);
            oci_commit($this->connect());
        }
    }