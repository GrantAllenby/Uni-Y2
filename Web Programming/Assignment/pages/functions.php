<?php
ini_set("session.save_path", "/home/unn_w18013678/sessionData");
session_start();

function getConnection()
{
    try {
        $connection = new PDO("mysql:host=localhost;dbname=unn_w18013678",
            "unn_w18013678", "REDACTED");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (!(isset($connection))) {
            throw new Exception("An error has occurred");
        }
        return $connection;
    } catch (Exception $e) {
        /* We should log the error to a file so the developer can look at any logs. However, for now we won't */
        log_error($e);
        echo "An error has occurred: " . $e->getMessage();
    }
    return null;
}

function log_error($e)
{
    $fileHandle = fopen("error_log_file.log", "ab");
    $errorDate = date('D M j G:i:s T Y');
    $errorMessage = $e->getMessage();
    fwrite($fileHandle, "$errorDate|$errorMessage" . PHP_EOL);
    fclose($fileHandle);
}


function set_session($key, $value)
{
    // Set key element = value
    $_SESSION[$key] = $value;
    return true;
}

function get_session($key)
{
    $returnString = "";
    if (isset($_SESSION[$key])) {
        $returnString = $_SESSION[$key];
    }
    return $returnString;
}

function check_login()
{
    if ($_SESSION['logged-in'] == true) {
        return true;
    } else {
        return false;
    }
}


function makeLogin($login, $logout)
{
    $makeLogInContent = "";
    if (isset($_SESSION['username'])) {
        $makeLogInContent = <<<LOGINSTART
        <form class = "login" method="post" action="$logout">
            <input class="loginButton" type="submit" value="logout">
        </form>
LOGINSTART;
        $makeLogInContent .= "\n";
    } elseif (!isset($_SESSION['username'])) {
        $makeLogInContent = <<<LOGINSTART
    <form class = "login" method="post" action="$login">
    Username <input type="text" name="username">
    Password <input type="password" name="password">
    <input class="loginButton" type="submit" value="login">
    </form>
LOGINSTART;
        $makeLogInContent .= "\n";
    }
    return $makeLogInContent;

}

function makePageStart($title, $style, $gridID)
{
    $pageStartContent = <<<PAGESTART
    
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>$title</title> 
		<link href="$style" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	</head>
	<body>
    <div id="$gridID">
PAGESTART;
    $pageStartContent .= "\n";
    return $pageStartContent;
}

function makeHeader($headerOne)
{
    $headContent = <<<HEAD
		<header>
			<h1>$headerOne</h1>
		</header>
HEAD;
    $headContent .= "\n";
    return $headContent;
}

function makeNavMenu($navMenuHeader, array $links)
{

    $linkString = "";
    foreach ($links as $key => $value) {
        $linkString .= "<a href='$key'>$value</a>\n";
    }

    $navMenuContent = <<<NAVMENU
			<nav>
				<h2>$navMenuHeader</h2>
				<ul>
					<li>$linkString</li>
				</ul>	
			</nav>
NAVMENU;
    $navMenuContent .= "\n";
    return $navMenuContent;

}

function startMain()
{
    return "<main>\n";
}

function endMain()
{
    return "</main>\n";
}

function makeFooterTag($footerTag)
{
    $footContent = <<<FOOT
<p id="footerTag">$footerTag</p>
FOOT;
    $footContent .= "\n";
    return $footContent;
}

function makeFooterStart()
{
    return "<footer>\n";
}

function makeFooterEnd()
{
    return "</footer>\n";
}

function makePageEnd()
{
    return "</div>\n</body>\n</html>";
}

?>