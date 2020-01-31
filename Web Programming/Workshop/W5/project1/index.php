<?php
include_once ('functions.php');
echo makePageStart("Student Details", "style.css");
echo makeHeader("Enter details");
echo makeNavMenu("Links", array("index.php" => "Home", "readCSV.php" => "Choose Tables"));
echo startMain()
?>
<h3>Get student details with button below</h3>
    <form method="get" action="form.php">
        <button type="submit">Continue</button>
    </form>

<?php
echo endMain();
echo makeFooter("Copyright University 2019");
echo makePageEnd();


