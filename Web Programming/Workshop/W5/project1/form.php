<?php
include 'functions.php';
echo makePageStart("Records","style.css");
echo makeHeader("Records");
echo makeNavMenu("Links", array("index.php" => "Home", "readCSV.php" => "Choose Tables"));
echo startMain();
try {
// Open a CSV file called students.csv
    $fileHandle = fopen("students.csv", "wb");
// Make a database connection
    $dbConn = getConnection();
// Query the database srs_student table using SQL and PDO to retrieve the studentid, forename, surname, coursecode, stage and email for each student record
    $selectSQL = "SELECT studentid, forename, surname, coursecode, stage, email FROM srs_student
ORDER BY studentid";
    $stmt = $dbConn->query($selectSQL);
    echo "<h3>Student Details</h3>";
// Iterate over the query results set with a while loop using fetch(PDO::FETCH_NUM), e.g. while ($row = $stmt->fetch(PDO::FETCH_NUM))
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        // For each iteration (record) write the data as a CSV-formatted string. Hint: use fputcsv
        $list = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
        fputcsv($fileHandle, $list);
        // Also for each iteration (record) generate html to display the record’s student ID,
        // forename, surname, courseCode, stage and email address to the browser.
        // Note that as you are retrieving the records as a numerical array, you will need to access the record’s
        // field name value by numerical position. For example, $row[0] for studentID
        echo "<table>
                <tr>
                <td id='studentID'>$row[0]</td>
                <td id='forename'>$row[1]</td>
                <td id='surname'>$row[2]</td>
                <td id='courseCode'>$row[3]</td>
                <td id='stage'>$row[4]</td>
                <td id='email'>$row[5]</td>
                </tr>
                </table>";

        }
// Close the csv file
        fclose($fileHandle);
// Display a message saying that the records have been written to the file
        echo "<p id='confirmation'>records successfully written</p>";
// Handle exceptions
}
catch (Exception $e){
    echo "<p> an error has occurred</p>";
    log_error($e);
}

echo endMain();
echo makeFooter("copyright University");
echo makePageEnd();
