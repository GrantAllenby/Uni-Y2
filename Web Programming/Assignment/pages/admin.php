<?php
//Creates the content for the page including DOCTYPE.
require_once('functions.php');
echo makePageStart('Admin', 'style.css', "gridContainer");
echo makeHeader('northEvents - Admin');
echo makeNavMenu("Links", array("index.php" => "Home", "bookEventsForm.php" => "Book Events", "admin.php" => "Admin", "credits.php" => "Credits"));
echo makeLogin('loginProcess.php', 'logout.php');

//Creates an array for errors to be stored in and then displayed.
$errors = array();

//Checks if user is logged in.
if (isset($_SESSION['username'])) {
    $errors = array();

    echo startMain();
    echo "<h3>Event Details</h3>";
    echo "<table>
            <tr>
                    <th class='eventTitle'>Event</th>
                    <th class='venueName'>Venue</th>
                    <th class='catDesc'>Category</th>
                    <th class='eventStartDate'>Start Date</th>
                    <th class='eventEndDate'>End Date</th>
                    <th class='eventPrice'>Price</th>
            </tr>
            </table>\n";

    try {
        require_once('functions.php');
        $dbConn = getConnection();
        //selects the SQL from the table and joins the required tables to allow the display of details.
        $selectSQL = "SELECT eventID, eventTitle, venueName, catDesc,
                             eventStartDate, eventEndDate, eventPrice FROM NE_events
                             JOIN NE_category ON NE_events.catID = NE_category.catID
                             JOIN NE_venue ON NE_events.venueID = NE_venue.venueID
                             ORDER BY eventTitle";
        $stmt = $dbConn->query($selectSQL);
        //Allows the display of all details within the database in a table format
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            echo "<form>
                <table>
                <tr>
                <td class='eventTitle'><a href='editEventForm.php?eventID={$row[0]}'>$row[1]</a></td>
                <td class='venueName'>$row[2]</td>
                <td class='catDesc'>$row[3]</td>
                <td class='eventStartDate'>$row[4]</td>
                <td class='eventEndDate'>$row[5]</td>
                <td class='eventPrice'>$row[6]</td>
                </tr>
                </table>
                </form>\n";
        }
    } catch (Exception $e) {
        //Stores an error in a file and prints a user-friendly message.
        log_error($e);
        $errors[] = "<p>An error has occurred</p>" . $e->getMessage();
        echo "<p class='error'>.</p>";
    }

    echo endMain();
    //Tells the user they need to be logged in.
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
?>
