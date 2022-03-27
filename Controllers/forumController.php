<?php
    include_once "../Models/forumDataBase.php";

    class Forumcontroller extends Forum {
        function list_all(){
            return $this->listAllDB();
        }
    }