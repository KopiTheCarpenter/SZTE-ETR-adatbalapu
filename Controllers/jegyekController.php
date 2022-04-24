<?php
    include_once "../../Models/jegyekDataBase.php";

    class Jegyekcontroller extends Jegyek {
        function list_myDegrees(){
            return $this->listAllDegrees();
        }

        function fetchAll($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["NEV"] . "</td>".
                    "<td>" . $row["HONAP"] . "</td>" .
                    "<td>" . $row["JEGY"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        }
    }