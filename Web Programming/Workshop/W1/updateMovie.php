<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<title>movieUpdate.php - updating a movie record to a database using PDO</title>
</head>
<body>

<?php
// Retrieve variables
$movieID = filter_has_var(INPUT_GET, 'movieID') ? $_GET['movieID'] : null;
$categoryID = filter_has_var(INPUT_GET, 'categoryID') ? $_GET['categoryID'] : null;
$directorID = filter_has_var(INPUT_GET, 'directorID') ? $_GET['directorID'] : null;
$notes = filter_has_var(INPUT_GET, 'notes') ? $_GET['notes'] : null;

$errors = false;

if (empty($movieID)) {
	echo "<p>You need to have selected a movie.</p>\n";
	$errors = true;
}
if (empty($categoryID)) {
	echo "<p>You need to choose a category.</p>\n";
	$errors = true;
}
if (empty($directorID)) {
	echo "<p>You need to choose a director.</p>\n";
	$errors = true;
}
if ($errors === true) {
	echo "<p>Please try <a href='chooseMovieListEx6.php'>again</a>.</p>\n";
}
else {
	try {
		require_once("../functions2.php");
		$dbConn = getConnection();
		$notes = $dbConn->quote($notes);

		$updateSQL = "UPDATE nc_movie SET categoryID=$categoryID, directorID = $directorID, notes = $notes WHERE movieID = $movieID";
		$dbConn->exec($updateSQL);
		echo "<p>Movie updated</p>\n";
	} catch (Exception $e) {
		 echo "<p>Movie not updated: " . $e->getMessage() . "</p>\n";
	}
}
?>
</body>
</html>