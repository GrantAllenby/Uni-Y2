<?php
function getConnection()
{
    try {
        $connection = new PDO("mysql:host=localhost;dbname=unn_w18013678",
            "unn_w18013678", "REDACTED");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (Exception $e) {
        /* We should log the error to a file so the developer can look at any logs. However, for now we won't */
        throw new Exception("Connection error " . $e->getMessage(), 0, $e);
    }
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

function makePageStart($title, $style)
{
    $pageStartContent = <<<PAGESTART
    
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>$title</title> 
		<link href="$style" rel="stylesheet" type="text/css">
	</head>
	<body>
<div id="gridContainer">
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

function makeNavMenu($navMenuHeader, array $links) {

    $linkString = "";
    foreach ($links as $key => $value) {
        $linkString .= "<li><a href='$key'>$value</a></li>\n";
    }

    $navMenuContent = <<<NAVMENU
			<nav>
				<h2>$navMenuHeader</h2>
				<ul>
					$linkString
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
function makeFooter($footerTag)
{
    $footContent = <<<FOOT
<footer>
<p>$footerTag</p>
</footer>
FOOT;
    $footContent .= "\n";
    return $footContent;
}

function makePageEnd()
{
    return "</div>\n</body>\n</html>";
}
?>