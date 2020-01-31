<?php
//Creates the content for the page including doctype.
require_once('functions.php');
echo makePageStart('Admin', 'style.css', "gridContainer");
echo makeHeader("northEvents - logOut");
echo makeNavMenu("Links", array("index.php" => "Home", "bookEventsForm.php" => "Book Events", "getOffers.php" => "Get Offers", "admin.php" => "Admin", "credits.php" => "Credits"));
echo makeLogin('loginProcess.php', 'logout.php');
echo startMain();

//The meta tag below automatically redirects the user after 5 seconds to the index page -->
echo "<meta http-equiv = 'refresh' content = '5; url = http://unn-w18013678.newnumyspace.co.uk/Y2/Assignment/pages/index.php' />";
echo "<p id='logoutMessage'>User logged out. If your browser doesn't redirect you <br>";
echo "<a href='http://unn-w18013678.newnumyspace.co.uk/Y2/Assignment/pages/index.php'>click here</a></p>";

//This redirects the user back to the page they were just on when logged out.
$return = $_SERVER['HTTP_REFERER'];
header("Location: $return");

echo endMain();
echo makeFooterStart();
echo makeFooterTag("created by Grant A w18013678");
echo makeFooterEnd();
echo makePageEnd();;
//un sets the current session.
unset($_SESSION);
session_destroy();
?>