<?php
    include_once "../Models/befizetDataBase.php";

    class Befizetcontroller extends Befizet{
        function list_all(){
            return $this->listAllDB();
        }
    }