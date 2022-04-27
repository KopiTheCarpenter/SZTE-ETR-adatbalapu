<?php
    include_once "connectDataBase.php";

    class Penzugy extends DataBase{
        protected function listAll(){
            $usrn = $_SESSION["username"];
            $sql = "SELECT DIAKOK.NEV,PENZUGY.* FROM BEFIZET 
                        INNER JOIN DIAKOK ON BEFIZET.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                        INNER JOIN PENZUGY ON BEFIZET.PENZID = PENZUGY.PENZID
                    WHERE OKTATASIAZON = $usrn";
            return oci_parse($this->connect(), $sql);
        }

        protected function getAllStudents(){
            $sql = "SELECT * FROM DIAKOK";
            return oci_parse($this->connect(), $sql);
        }

        protected function selectedStudent($name){
            $sql = "SELECT DIAKOK.*, PENZUGY.* FROM BEFIZET
                            INNER JOIN DIAKOK ON BEFIZET.DOKTATASIAZON = DIAKOK.OKTATASIAZON 
                            INNER JOIN PENZUGY ON BEFIZET.PENZID = PENZUGY.PENZID
                        WHERE DIAKOK.NEV = '$name'";
            return oci_parse($this->connect(), $sql);
        }

        protected function updateStudentsCash($nev, $ertek){
            $sql = "UPDATE PENZUGY SET BEFIZETETTOSSZEG = $ertek WHERE PENZID = (SELECT PENZID FROM BEFIZET WHERE DOKTATASIAZON = (SELECT OKTATASIAZON FROM DIAKOK WHERE NEV = '$nev'))";
            $stmt = oci_parse($this->connect(), $sql);
            oci_execute($stmt, OCI_DEFAULT);
            oci_commit($this->connect());
        }
    }