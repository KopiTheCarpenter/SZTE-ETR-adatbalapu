<?php
    include_once "../Models/penzugyDataBase.php";

    class Penzugycontroller extends Penzugy{
        function list_all(){
            return $this->listAllDB();
        }
    }