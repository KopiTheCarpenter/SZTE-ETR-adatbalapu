<?php
    include_once "../../Controllers/diakokController.php";
    $controller = new Diakokcontroller();
    $var = $controller->list_all();
    $var2 = oci_execute($var);
    while ( $row = oci_fetch_array($var, OCI_ASSOC+OCI_RETURN_NULLS) ) {
        echo $row["NEV"] . $row["OKTATASIAZON"] . "\n";
    }
    oci_free_statement($var);