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
echo"<p>Session set.</p>"

?>

</body>
</html>