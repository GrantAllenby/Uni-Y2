<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<title>ChooseMoveList.php - creating hyperlinks to click on to edit a movie</title>
</head>
<body>
<h1>All movies</h1>
<?php
try {
	require_once("../functions2.php");
	$dbConn = getConnection();

	$sqlQuery = "SELECT movieID, title, categoryName, directorName
				 FROM nc_movie
				 INNER JOIN nc_category
				 ON nc_category.categoryID = nc_movie.categoryID
				 INNER JOIN nc_director
				 ON nc_director.directorID = nc_movie.directorID
				 ORDER BY title";
	$queryResult = $dbConn->query($sqlQuery);

	while ($rowObj = $queryResult->fetchObject()) {
		echo "<div class='movie'>\n
				   <span class='title'><a href='editMovieForm.php?movieID={$rowObj->movieID}'>{$rowObj->title}</a></span>\n
				   <span class='categoryName'>{$rowObj->categoryName}</span>\n
				   <span class='directorName'>{$rowObj->directorName}</span>\n
			  </div>\n";
	}
}
catch (Exception $e){
	echo "<p>Query failed: ".$e->getMessage()."</p>\n";
}
?>

</body>
</html>