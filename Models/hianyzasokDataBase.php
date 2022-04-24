<?php
    include_once "connectDataBase.php";

    class Hianyzasok extends DataBase{
        protected function listAll(){
            $usrn = $_SESSION["username"];
            $sql = "SELECT DIAKOK.*, TO_CHAR(HIANYZASOK.DATUM, 'MONTH' ) AS HONAP, TANTARGYAK.* FROM HIANYZIK 
                        INNER JOIN DIAKOK ON HIANYZIK.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                        INNER JOIN HIANYZASOK ON HIANYZIK.HIANYZASID = HIANYZASOK.HIANYZASID
                        INNER JOIN TANTARGYAK ON HIANYZIK.TANTARGYID = TANTARGYAK.TANTARGYID
                    WHERE DIAKOK.OKTATASIAZON = $usrn";
            return oci_parse($this->connect(), $sql);
        }
    }