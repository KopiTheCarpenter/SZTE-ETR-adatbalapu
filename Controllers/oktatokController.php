<?php
    include_once "../Models/oktatokDataBase.php";

    class Oktatokcontroller extends Oktatok {
        function list_all(){
            return $this->listAllDB();
        }
    }