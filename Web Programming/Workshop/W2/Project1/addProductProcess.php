<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 2 Workshop Exercise</title>
</head>
<body>
<?php

list($input, $errors) = validate_form();
if ($errors) {
    echo show_errors($errors);
} else {
    echo process_form($input);
}

function validate_form()
{

    $productName = filter_has_var(INPUT_GET, 'productName') ? $_GET['productName'] : null;
    $productName = trim($productName);

    $description = filter_has_var(INPUT_GET, 'description') ? $_GET['description'] : null;
    $description = trim($description);

    $categoryID = filter_has_var(INPUT_GET, 'categoryID') ? $_GET['categoryID'] : null;
    $categoryID = trim($categoryID);

    $price = filter_has_var(INPUT_GET, 'price') ? $_GET['price'] : null;
    $price = trim($price);

    $input = array();
    $errors = array();
    $categoryArray = array("c1", "c2", "c3");


    $input['productName'] = filter_has_var(INPUT_GET, 'productName')
        ? $_GET['productName'] : null;
    $input['productName'] = trim($input['productName']);

    $input['description'] = filter_has_var(INPUT_GET, 'description')
        ? $_GET['description'] : null;
    $input['description'] = trim($input['description']);

    $input['categoryID'] = filter_has_var(INPUT_GET, 'categoryID')
        ? $_GET['categoryID'] : null;
    $input['categoryID'] = trim($input['categoryID']);

    $input['price'] = filter_has_var(INPUT_GET, 'price')
        ? $_GET['price'] : null;
    $input['price'] = trim($input['price']);


    if (empty($productName)) {
        $errors[] = ' Product name empty. ';
    }

    if (empty($categoryID)) {
        $errors[] = ' Category ID empty. ';
    }

    if (empty($description)) {
        $errors[] = ' Description empty. ';
    }

    if (empty($price)) {
        $errors[] = ' Price empty. ';
    }

    if (strlen($productName) > 50) {
        $errors[] = ' Product name too long. ';
    }

    if (strlen($description) > 50) {
        $errors[] = ' Description too long. ';
    }

    if (strlen($price) > 10) {
        $errors[] = ' Price too long. ';
    }

    if (!filter_var($price, FILTER_VALIDATE_INT)) {
        $errors[] = ' Price not an integer. ';
    }

    if (!in_array($categoryID, $categoryArray)) {
        $errors[] = ' Invalid category. ';
    }

    return array($input, $errors);
}

function show_errors($errors)
{
    $errString = "You have the following errors:<br>";
    foreach ($errors as $output) {
        $errString .= $output . "<br>";
    }
    return $errString;
}

function process_form($input)
{
    include 'database_conn.php';
    $dbConn = getConnection();

    $insertSQL = "INSERT INTO p_products (categoryID, description, price, productName)
              VALUES (:categoryID, :description, :price, :productName)";
    $stmt = $dbConn->prepare($insertSQL);
    $stmt->execute(array(':categoryID' => $input['categoryID'], ':description' => $input['description'], ':price' => $input['price'], ':productName' => $input['productName']));

    $inputString = "You have entered the following details<br>";
    foreach ($input as $output) {
        $inputString .= $output . "<br>";
    }
    return $inputString;
}

/*if (!(empty($productName)) && !(empty($categoryID)) && !(empty($description)) && !(empty($price)) && (strlen($productName) <= 50)) {
    $insertSQL = "INSERT INTO p_products (categoryID, description, price, productName)
              VALUES ('$categoryID', '$description', '$price', '$productName')";
    $success = $dbConn->query($insertSQL);
    mysqli_close($dbConn);

    echo "<h1>Product details</h1>\n";
    echo "<p>Name: $productName</p>\n";
    echo "<p>Description: $description</p>\n";
    echo "<p>Category: $categoryID</p>\n";
    echo "<p>Price: $price</p>\n";
    echo "<p>Product name string length: " . strlen($productName) . "</p>";
    echo "<p>Description string length: " . strlen($description) . "</p>";
    echo "<p>Price string length: " . strlen($price) . "</p>";
*/
?>
</body>
</html>
