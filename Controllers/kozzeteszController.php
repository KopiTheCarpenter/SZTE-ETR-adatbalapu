<?php
    include_once "../Models/kozzeteszDataBase.php";

    class Kozzeteszcontroller extends Kozzetesz {
        function list_all(){
            return $this->listAllDB();
        }
    }