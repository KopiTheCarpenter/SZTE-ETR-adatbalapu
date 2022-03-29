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
                if($_SESSION["oktato"] == 1){
                    echo "<td> <a href='oktatok_oktato.php'>  Felvesz  </a>  </td>";
                    echo "<td> <a href='oktatok_oktato.php'>  Módisít  </a>  </td>";
                    echo "<td> <a href='oktatok_oktato.php'>  Töröl  </a>  </td>";
                }
                echo "</tr>";
            }
            echo "</tbody>";
        }
    }