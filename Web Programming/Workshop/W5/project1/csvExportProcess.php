<?php
include_once "functions.php";
echo makePageStart("Records chosen", "style.css");
echo makeHeader("Records chosen");
echo makeNavMenu("Links", array("index.php" => "Home", "readCSV.php" => "Choose Tables"));
echo startMain();
// Make a database connection
try {
    $dbConn = getConnection();
    $fileHandle = fopen("students.csv", "rb");
    while (!feof($fileHandle)) {
        $data = fgetcsv($fileHandle);
        if ($data) {
            $insertSQL = "INSERT INTO copy_student (studentid, forename, surname, coursecode, stage, email)
                      VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]')";
            $stmt = $dbConn->query($insertSQL);
        }
        echo "<table>
                <tr>
                <td id='studentID'>$data[0]</td>
                <td id='forename'>$data[1]</td>
                <td id='surname'>$data[2]</td>
                <td id='courseCode'>$data[3]</td>
                <td id='stage'>$data[4]</td>
                <td id='email'>$data[5]</td>
                </tr>
                </table>";
    }
    fclose($fileHandle);
}
catch (Exception $e) {
    log_error($e);
    echo "<p>An error has occurred.</p>";
}

// Query the database srs_student table using SQL and PDO to retrieve the studentid, forename, surname, coursecode, stage and email for each student record.

?>
<?php
echo endMain();
echo makeFooter("Copyright University");
echo makePageEnd();
