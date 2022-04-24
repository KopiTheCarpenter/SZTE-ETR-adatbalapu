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
    }