<?php
    include_once "../../Models/penzugyDataBase.php";

    class Penzugycontroller extends Penzugy{
        function list_Money(){
            return $this->listAll();
        }

        function listingMyDatas($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["TELJESOSSZEG"] . "</td>".
                    "<td>" . $row["BEFIZETETTOSSZEG"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        }
    }