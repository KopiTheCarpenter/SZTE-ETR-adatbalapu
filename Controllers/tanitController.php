<?php
    include_once "../Models/tanitDataBase.php";

    class Tanitcontroller extends Tanit{
        function list_all(){
            return $this->listAllDB();
        }
    }