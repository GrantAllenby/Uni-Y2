<?php
include_once "functions.php";
echo makePageStart("Choose tables", "style.css");
echo makeHeader("Choose specific tables");
echo makeNavMenu("Links", array("index.php" => "Home", "readCSV.php" => "Choose Tables"));
echo startMain()
?>
    <h3>Choose tables you wish to return</h3>
    <form method="get" action="csvExportProcess.php">
        <input type="checkbox" name="chk[]"
        <button type="submit">Continue</button>
    </form>

<?php
echo endMain();
echo makeFooter("Copyright University");
echo makePageEnd();
