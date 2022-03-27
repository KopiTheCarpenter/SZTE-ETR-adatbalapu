<?php
    include_once "../Models/tantargyakDataBase.php";

    class Tantargyakcontroller extends Tantargyak{
        function list_all(){
            return $this->listAllDB();
        }
    }