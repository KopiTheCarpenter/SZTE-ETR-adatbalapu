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

        function getAllNames(){
            return $this->getAllStudents();
        }

        function renderView($names){
            oci_execute($names);
            echo "<div class='list_name'>";
			echo "<label for='diak'>Diák:</label>";
            echo "<select name='nev'>";
            echo "<option disabled selected value>" . "" . "</option>";
            while ( $row = oci_fetch_array($names, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<option>" . $row["NEV"] . "</option>";
            }
            echo "</select>";
			echo "</div>";
        }

        function select($name){
            return $this->selectedStudent($name);
        }

        function listSelectedData($var2){
            oci_execute($var2);
            echo "<table class='content-table2'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>" . "Név" . "</th>";
            echo "<th>" . "Befizetett" . "</th>";
            echo "<th>" . "Teljes" . "</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var2, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["NEV"] . "</td>".
                    "<td>" . $row["BEFIZETETTOSSZEG"] . "</td>" .
                    "<td>" . $row["TELJESOSSZEG"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }

        function update($nev, $ertek){
            return $this->updateStudentsCash($nev, $ertek);
        }
    }