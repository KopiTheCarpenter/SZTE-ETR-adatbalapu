<?php
    include_once "../../Models/oktatokDataBase.php";

    class Oktatokcontroller extends Oktatok {
        function list_all(){
            return $this->listAllDB();
        }

        function listDatas(){
            return $this->listMyDatas();
        }

        function validateTeacher($usernameVar, $passwordVar){
            return $this->validate($usernameVar, $passwordVar);
        }

        function renderNewView($usernameVar, $passwordVar, $var){
            oci_execute($var);
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                if($row["OKTATASIAZON"] == $usernameVar && $row["JELSZO"] == $passwordVar){
                    session_start();
                    $_SESSION["username"] = $usernameVar;
                    $_SESSION["password"] = $passwordVar;
                    $_SESSION["oktato"] = 1;
                    header("Location: adataim_oktato.php");
                }
            }
            oci_free_statement($var);
        }

        function listingAllTeacher($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["OKTATASIAZON"] . "</td>" .
                    "<td>" . $row["NEV"] . "</td>" .
                    "<td>" . $row["SZULETESIEV"] . "</td>";
                echo "</tr>";

            }
            echo "</tbody>";
        }

        function listingMyDatas($var){
            oci_execute($var);
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["OKTATASIAZON"] . "</td>" .
                    "<td>" . $row["NEV"] . "</td>" .
                    "<td>" . $row["SZULETESIEV"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        }
    }