<?php
    include_once "../Models/jegyetbeirDataBase.php";

    class Jegyetbeircontroller extends Jegyetbeir {
        function list_all(){
            return $this->listAllDB();
        }
    }