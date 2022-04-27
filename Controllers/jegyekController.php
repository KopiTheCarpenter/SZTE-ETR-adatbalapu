<?php
    include_once "../../Models/jegyekDataBase.php";

    class Jegyekcontroller extends Jegyek {
        function list_myDegrees(){
            return $this->listAllDegrees();
        }

        function chosenStudent($postHonap, $postOktatasiazon, $postTargynev){
            return $this->chooseStudent($postHonap, $postOktatasiazon, $postTargynev);
        }

        function listSelectedDatas($var2){
            oci_execute($var2);
            echo "<table class='content-table2'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>" . "Név" . "</th>";
            echo "<th>" . "Hónap" . "</th>";
            echo "<th>" . "Jegy" . "</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            while ( $row = oci_fetch_array($var2, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<td>" . $row["NEV"] . "</td>".
                    "<td>" . $row["HONAP"] . "</td>" .
                    "<td>" . $row["JEGY"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }

        function getAllMonths(){
            return $this->getMonths();
        }

        function getAllStudents(){
            return $this->getStudents();
        }

        function getAllClasses(){
            return $this->getClasses();
        }

        function renderView($months, $studentes, $classes){
            oci_execute($months);
            echo "<div class='list_name'>";
            echo "<label for='honap'>" . "Hónap:" . "</label>";
            echo "<select name='honap'>";
            echo "<option disabled selected value>" . "" . "</option>";
            while ( $row = oci_fetch_array($months, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<option>" . $row["HONAP"] . "</option>";
            }
            echo "</select>";
            echo "</div>";
            oci_execute($studentes);
            echo "<div class='list_name'>";
            echo "<label for='oktatasiazon'>" . "Oktatási azonosító:" . "</label>";
            echo "<select name='oktatasiazon'>";
            echo "<option disabled selected value>" . "" . "</option>";
            while ( $row = oci_fetch_array($studentes, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<option>" . $row["OKTATASIAZON"] . "</option>";
            }
            echo "</select>";
            echo "</div>";
            oci_execute($classes);
            echo "<div class='list_name'>";
            echo "<label for='tantargy'>" . "Tantárgy:" . "</label>";
            echo "<select name='tantargynev'>";
            echo "<option disabled selected value>" . "" . "</option>";
            while ( $row = oci_fetch_array($classes, OCI_ASSOC+OCI_RETURN_NULLS) ) {
                echo "<option>" . $row["NEV"] . "</option>";
            }
            echo "</select>";
            echo "</div>";
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

        function createNewMark($ertek, $honap){
            return $this->create($ertek, $honap);
        }

        function helpQuery($tantargynev){
            return $this->helpingQueryTantargyID($tantargynev);
        }

        function createWho($oktatasiazon, $tantargyid){
            return $this->createdBy($oktatasiazon, $tantargyid);
        }
    }