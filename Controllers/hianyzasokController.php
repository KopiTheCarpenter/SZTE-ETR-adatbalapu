<?php
    include_once "../Models/hianyzasokDataBase.php";

    class Hianyzasokcontroller extends Hianyzasok {
        function list_all(){
            return $this->listAllDB();
        }
    }