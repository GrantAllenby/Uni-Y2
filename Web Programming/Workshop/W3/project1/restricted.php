<?php
ini_set("session.save_path", "/home/unn_w18013678/sessionData");
session_start();
require_once('functions.php');
echo makePageStart('Admin', 'style.css');
echo makeHeader('Admin');
echo makeNavMenu('Links', array("loginForm.php" => "login", "logout.php" => "log out"));

if(isset($_SESSION['username'])){
        echo startMain();
        ?>
        <p>Hello</p>
        <?php
        echo endMain();
} else {
    echo startMain();
    ?>
    <p>You must be logged in to view this page.</p>
    <?php
    echo endMain();
}
echo makeFooter("Zombocom");
echo makePageEnd();
?>
