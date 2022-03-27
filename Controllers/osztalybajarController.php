<?php
    include_once "../Models/osztalybajarDataBase.php";

    class Osztalybajarcontroller extends Osztalybajar {
        function list_all(){
            return $this->listAllDB();
        }
    }