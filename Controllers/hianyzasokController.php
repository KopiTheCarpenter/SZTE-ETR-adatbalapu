<?php
    include_once "../../Models/hianyzasokDataBase.php";

    class Hianyzasokcontroller extends Hianyzasok {
        function list_allMissing(){
            return $this->listAll();
        }

        function fetchAll($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["HONAP"] . "</td>";
                if($_SESSION["oktato"] == 1){
                    echo "<td> <a href='oktatok_oktato.php'>  Módisít  </a>  </td>";
                    echo "<td> <a href='oktatok_oktato.php'>  Töröl  </a>  </td>";
                }
                echo "</tr>";
            }
            echo "</tbody>";
        }

    }