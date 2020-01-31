<?php
ini_set("session.save_path", "/home/unn_w18013678/sessionData");
session_start();
require_once('functions.php');
echo makePageStart('Logged Out', 'style.css');
echo makeHeader('Logged out');
echo makeNavMenu('Links', array("loginForm.php" => "login", "logout.php" => "log out"));
echo startMain();
?>
    <meta http-equiv = "refresh" content = "5; url = http://unn-w18013678.newnumyspace.co.uk/Y2/Workshops/W3/Project1/loginForm.php" />
<?php
unset($_SESSION);
session_destroy();
echo "<p>User logged out.<br> 
If your browser doesn't redirect you <br>
<a href='http://unn-w18013678.newnumyspace.co.uk/Y2/Workshops/W3/Project1/loginForm.php'>click here</a>";
echo endMain();
echo makeFooter("Copyright University");
echo makePageEnd();
?>