<?php
function getConnection () {
    $connection = new PDO("mysql:host=localhost;
				   dbname=unn_w18013678",
        "unn_w18013678", "DevinTownsend1994!");
    return $connection;
}
?>

