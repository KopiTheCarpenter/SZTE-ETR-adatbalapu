<?php
    include_once "../../Models/diakokDataBase.php";

    class Diakokcontroller extends Diakok {
        function list_all(){
            return $this->listAllDB();
        }

        function validateStudent($usernameVar, $passwordVar){
            return $this->validate($usernameVar, $passwordVar);
        }

        function listDatas(){
            return $this->listMyDatas();
        }

        function renderNewView($usernameVar, $passwordVar, $var){
            oci_execute($var);
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                if($row["OKTATASIAZON"] == $usernameVar && $row["JELSZO"] == $passwordVar){
                    session_start();
                    $_SESSION["username"] = $usernameVar;
                    $_SESSION["password"] = $passwordVar;
                    header("Location: adataim_diak.php");
                }
            }
            oci_free_statement($var);
        }

        function listingMyDatas($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["OKTATASIAZON"] . "</td>".
                "<td>" . $row["NEV"] . "</td>" .
                "<td>" . $row["SZULETESIEV"] . "</td>" .
                "<td>" . $row["SZULONEVE"] . "</td>" .
                "<td>" . $row["MEGNEVEZES"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        }

        function listingAllStudent($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["OKTATASIAZON"] . "</td>" .
                    "<td>" . $row["NEV"] . "</td>" .
                    "<td>" . $row["SZULETESIEV"] . "</td>" .
                    "<td>" . $row["SZULONEVE"] . "</td>".
                    "<td>" . $row["MEGNEVEZES"] . "</td>";
                if($_SESSION["oktato"] == 1){
                    echo "<td> <a href='oktatok_oktato.php'>  Módisít  </a>  </td>";
                    echo "<td> <a href='oktatok_oktato.php'>  Töröl  </a>  </td>";
                }
                echo "</tr>";
            }
            echo "</tbody>";
        }

        function createStudent($nev, $datum, $sznev){
            return $this->createStudents($nev, $datum, $sznev);
        }

        function newClassMember($oktatasiazon, $osztaly){
            return $this->createClassMember($oktatasiazon, $osztaly);
        }
    }