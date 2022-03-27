<?php
    include_once "../../Models/diakokDataBase.php";

    class Diakokcontroller extends Diakok {
        function list_all(){
            return $this->listAllDB();
        }
    }