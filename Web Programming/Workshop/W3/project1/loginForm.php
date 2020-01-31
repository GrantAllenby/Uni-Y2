<?php
ini_set("session.save_path", "/home/unn_w18013678/sessionData");
session_start();
require_once('functions.php');
echo makePageStart('Logged Out', 'style.css');
echo makeHeader('Logged out');
echo makeNavMenu('Links', array("loginForm.php" => "login", "logout.php" => "log out"));
echo startMain();
?>
<form method="post" action="loginProcess.php">
    Username <input type="text" name="username">
    Password <input type="password" name="password">
    <input type="submit" value="Logon">
</form>
<?php
echo endMain();
echo makeFooter("Copyright University");
echo makePageEnd();
?>