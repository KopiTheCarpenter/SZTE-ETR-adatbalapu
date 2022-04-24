<?php
    class DataBase{
        private $username;
        private $password;
        private $connectString;

        protected function get_username(){
            return $this->username;
        }

        protected function get_password(){
            return $this->password;
        }

        protected function get_connectString(){
            return $this->connectString;
        }

        function __construct(){
            $this->username = "vaakos";
            $this->password = "Skorpion12300";
            $this->connectString = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))(CONNECT_DATA=(SID=XE)))";;
        }

        protected function connect(){
            $connection = oci_connect($this->get_username(), $this->get_password(), $this->get_connectString());
            if ( !$connection ) {
                $e = oci_error();
                trigger_error(htmlentities($e['message'],
                    ENT_QUOTES), E_USER_ERROR);
            }
            return $connection;
        }
    }