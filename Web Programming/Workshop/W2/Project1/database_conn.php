<?php
function getConnection () {
    $connection = new PDO("mysql:host=localhost;
				   dbname=unn_w18013678",
        "unn_w18013678", "REDACTED");
    return $connection;
}
?>

