<?php
    include_once "../Models/osztalyokDataBase.php";

    class Osztalyokcontroller extends Osztalyok{
        function list_all(){
            return $this->listAllDB();
        }
    }