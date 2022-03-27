<?php
    include_once "../Models/hianyzikDataBase.php";

    class Hianyzikcontroller extends Hianyzik{
        function list_all(){
            return $this->listAllDB();
        }
    }