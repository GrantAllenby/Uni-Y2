<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<title>editMovieForm.php- script to display an edit form for the chosen movie</title>
</head>
<body>
<?php
$movieID = filter_has_var(INPUT_GET, 'movieID') ? $_GET['movieID'] : null;


if (empty($movieID)) {
	echo "<p>Please <a href='chooseMovieList.php'>choose</a> a movie.</p>\n";
}
else {
	try {
		require_once("../functions2.php");
		$dbConn = getConnection();

		$sqlQuery = "SELECT movieID, title, nc_movie.categoryID, categoryName, nc_movie.directorID, directorName, notes
				 FROM nc_movie
				 INNER JOIN nc_category
				 ON nc_category.categoryID = nc_movie.categoryID
				 INNER JOIN nc_director
				 ON nc_director.directorID = nc_movie.directorID
				 WHERE movieID = $movieID";
		$queryResult = $dbConn->query($sqlQuery);

		$rowObj = $queryResult->fetchObject();

		echo "
		<h1>Update '{$rowObj->title}'</h1>
		<form id='UpdateMovie' action='updateMovie.php' method='get'>
			<p>Movie ID <input type='text' name='movieID' value='$movieID' readonly /></p>
			<p>Title <input type='text' name='title' size='50' value='{$rowObj->title}' /></p>
			<p>Category <input type='text' name='categoryID' value='{$rowObj->categoryID}' /></p>
			<p>Director <input type='text' name='directorID' value='{$rowObj->directorID}' /></p>
			Notes <br />
			<textarea name='notes'>{$rowObj->notes}</textarea>
			<p><input type='submit' name='submit' value='Update Movie'></p>
		</form>
		";
	}
	catch (Exception $e){
		echo "<p>Movie details not found: ".$e->getMessage()."</p>\n";
	}
}
?>
</body>
</html>