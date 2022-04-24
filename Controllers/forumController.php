<?php
    include_once "../../Models/forumDataBase.php";

    class Forumcontroller extends Forum {
        function list_all(){
            return $this->listAllDB();
        }

        function listingAllContent($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["MIT"] . "</td>" .
                    "<td>" . $row["MIKOR"] . "</td>" ;
                echo "</tr>";
            }
            echo "</tbody>";
        }
    }