<?php
//Creates the content for the page including DOCTYPE.
require_once('functions.php');
echo makePageStart('Admin', 'style.css', "gridContainer");
echo makeHeader('northEvents - Edit Event');
echo makeNavMenu("Links", array("index.php" => "Home", "bookEventsForm.php" => "Book Events", "admin.php" => "Admin", "credits.php" => "Credits"));
echo makeLogin('loginProcess.php', 'logout.php');

$errors = array();

if (isset($_SESSION['username'])) {

    $errors = array();

    //Get each parameter value from the request stream and using ternary if operators check each parameter to see if it was set.
    //If it is, store it in a variable. Otherwise store a value of null in the variable.
    $row[0] = filter_has_var(INPUT_GET, 'eventID') ? $_GET['eventID'] : null;
    $row[1] = filter_has_var(INPUT_GET, 'eventTitle') ? $_GET['eventTitle'] : null;
    $row[2] = filter_has_var(INPUT_GET, 'eventDescription') ? $_GET['eventDescription'] : null;
    $row[3] = filter_has_var(INPUT_GET, 'venueName') ? $_GET['venueName'] : null;
    $row[4] = filter_has_var(INPUT_GET, 'catDesc') ? $_GET['catDesc'] : null;
    $row[5] = filter_has_var(INPUT_GET, 'eventStartDate') ? $_GET['eventStartDate'] : null;
    $row[6] = filter_has_var(INPUT_GET, 'eventEndDate') ? $_GET['eventEndDate'] : null;
    $row[7] = filter_has_var(INPUT_GET, 'eventPrice') ? $_GET['eventPrice'] : null;

    //removing the whitespace from the rows.
    $row[0] = trim($row[0]);
    $row[1] = trim($row[1]);
    $row[2] = trim($row[2]);
    $row[3] = trim($row[3]);
    $row[4] = trim($row[4]);
    $row[5] = trim($row[5]);
    $row[6] = trim($row[6]);
    $row[7] = trim($row[7]);

    //if the rows are empty, will store error in error array.
    if (empty($row[0]) || empty($row[1]) || empty($row[2]) || empty($row[3]) || empty($row[4])
        || empty($row[5]) || empty($row[6]) || empty($row[7])
    ) {
        $errors[] = "<p class='error'>All fields must have values.</p>";
    }

    //if row 0 is not a valid int, throw an error.
    if (!filter_var($row[0], FILTER_VALIDATE_INT)) {
        $errors[] = "<p class='error'>ID must be an integer.</p>";
    }

    //if row 7 is not a valid float, throw an error.
    if (!filter_var($row[7], FILTER_VALIDATE_FLOAT)) {
        $errors[] = "<p class='error'>Price must be float.</p>";
    }

    //checks that start date and end date are not too short.
    if (strlen($row[5]) < 10 || strlen($row[6]) < 10) {
        $errors[] = "<p class='error'>Start/End Date too short. please use YYYY-MM-DD format.</p>";
    }
    //checks that start date and end date are not too long.
    if (strlen($row[5]) > 10 || strlen($row[6]) > 10) {
        $errors[] = "<p class='error'>Start/End Date too long. please use YYYY-MM-DD format.</p>";
    }

    //if errors, will echo errors.
    if ($errors) {
        echo startMain();
        echo show_errors($errors);
        echo endMain();
    }

    try {
        require_once('functions.php');

        //make a connection
        $dbConn = getConnection();

        //updates the selected details from editEventForm to the database using substitution.
        $updateSQL = "UPDATE NE_events JOIN NE_category ON NE_events.catID = NE_category.catID
                          JOIN NE_venue ON NE_events.venueID = NE_venue.venueID 
                          SET eventTitle = :eventTitle, eventDescription = :eventDescription,
                          venueName = :venueName, catDesc = :catDesc,
                          eventStartDate = :eventStartDate, eventEndDate = :eventEndDate, 
                          eventPrice = :eventPrice WHERE eventID = :eventID";

        $stmt = $dbConn->prepare($updateSQL);

        //replaces the substituted attributes with our actual attributes.
        $stmt->execute(array(':eventTitle' => $row[1],
            ':eventDescription' => $row[2],
            ':venueName' => $row[3],
            ':catDesc' => $row[4],
            ':eventStartDate' => $row[5],
            ':eventEndDate' => $row[6],
            ':eventPrice' => $row[7],
            ':eventID' => $row[0]));

        $success = true;

        if($success = true) {
            echo startMain();
            echo "<h3>Records successfully updated. </h3>";
            echo endMain();
        }

        else {
            $errors[] = "<p class='error'>An error has occurred.</p>";
        }

    } catch (Exception $e) {
        log_error($e);
        $errors[] = "Connection error " . $e->getMessage();
        echo "<p class='error'>An error has occurred.</p>";
    }
    echo endMain();
} else {
    $errors[] = "<p class='error'>You must be logged in to view this page.</p>";
}

if ($errors) {
    echo startMain();
    echo show_errors($errors);
    echo endMain();
}

function show_errors($errors)
{
    $errString = "<h3>You have the following errors:</h3><br>";
    foreach ($errors as $output) {
        $errString .= $output . "<br>";
    }
    return $errString;
}

echo makeFooterStart();
echo makeFooterTag("created by Grant A w18013678");
echo makeFooterEnd();
echo makePageEnd();