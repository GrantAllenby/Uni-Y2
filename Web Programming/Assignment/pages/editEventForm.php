<?php
//Creates the content for the page including DOCTYPE.
require_once('functions.php');
echo makePageStart('Admin', 'style.css', "gridContainer");
echo makeHeader('northEvents - Edit Event');
echo makeNavMenu("Links", array("index.php" => "Home", "bookEventsForm.php" => "Book Events", "admin.php" => "Admin", "credits.php" => "Credits"));
echo makeLogin('loginProcess.php', 'logout.php');
$errors = array();

//Checks to see if user is logged in.
if (isset($_SESSION['username'])) {
    $errors = array();

    $row[0] = filter_has_var(INPUT_GET, 'eventID') ? $_GET['eventID'] : null;


    if (empty($row[0])) {
        $errors[] = "<p class='error'>You must select an event to edit.</p>";
    }

    if ($errors) {
        echo startMain();
        echo show_errors($errors);
        echo endMain();
    }

    try {
        require_once('functions.php');
        $dbConn = getConnection();
        //selects the SQL from the table and joins the required tables to allow the display of details.
        $selectSQL = "SELECT eventID, eventTitle, eventDescription, venueName, catDesc,
                             eventStartDate, eventEndDate, eventPrice FROM NE_events
                             JOIN NE_category ON NE_events.catID = NE_category.catID
                             JOIN NE_venue ON NE_events.venueID = NE_venue.venueID where eventID = $row[0]";
        $stmt = $dbConn->query($selectSQL);

        $row = $stmt->fetch(PDO::FETCH_NUM);

        $catDescString = "";
        foreach ($row as $key => $value) {
            $catDescString .= $value;
        }

        echo startMain();
        //Allows the display of all details within the database in a table format and to edit.
        echo "<form id= 'editForm' action='updateEvent.php' method='get'>
            <table id =editEventTable>
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderID'>ID</th>
                    <td>
                    <input class='editEventID' type='text' name='eventID' value='{$row[0]}' readonly/>
                    </td>
                </tr>    
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderEvent'>Event</th>
                    <td>
                    <input class='editEventTitle' type='text' name='eventTitle' value='{$row[1]}'/>
                    </td>
                </tr>    
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderDesc'>Description</th>
                    <td>
                    <textarea class='editEventDescription' name='eventDescription' rows='5' cols='50' >$row[2]</textarea>
                    </td>
                </tr>    
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderVenue'>Venue</th>
                    <td>
                    <input class='editVenueName' type='text' name='venueName' value='{$row[3]}'/>
                    </td>
                </tr>    
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderCat'>Category</th>
                    <td>
                  <input class='editCatDesc' type='text' name='catDesc' value='{$row[4]}'/>
                    </td>
                </tr>    
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderStartDate'>Start Date</th>
                    <td>
                    <input class='editEventStartDate' type='text' name='eventStartDate' value='{$row[5]}'/>
                    </td>
                </tr>    
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderEndDate'>End Date</th>
                    <td>
                    <input class='editEventEndDate' type='text' name='eventEndDate' value='{$row[6]}'/>
                    </td>
                </tr>    
                <tr class='editEventTableRow'>
                    <th class='editEventHeaderPrice'>Price</th>
                    <td>
                    <input class='editEventPrice' type='text' name='eventPrice' value='{$row[7]}'/>
                    </td>
                </tr>
                </table>
                <input id='submitButton' type='submit' name='update' value='Update Event'>
            </form>\n";
    } //Stores an error in a file and prints a user-friendly message.
    catch (Exception $e) {
        log_error($e);
        $errors[] = "Connection error " . $e->getMessage();
        echo "<p class='error'>An error has occurred.</p>";
    }
    echo endMain();
    //Tells the user they need to be logged in
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