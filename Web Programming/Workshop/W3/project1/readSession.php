<?php
ini_set("session.save_path", "/home/unn_w18013678/sessionData");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>W3 Workshop</title>
</head>
<body>
<?php
$_SESSION['firstname'] = 'Grant';
if (isset($_SESSION['firstname'])) {
    echo $_SESSION['firstname'];
}
else {
    echo "<p>Session not set.</p>\n";
}

?>
</body>
</html>
