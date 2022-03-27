<?php
    include_once "../Models/jegyekDataBase.php";

    class Jegyekcontroller extends Jegyek {
        function list_all(){
            return $this->listAllDB();
        }
    }