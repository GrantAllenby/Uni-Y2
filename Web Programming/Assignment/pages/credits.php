<?php
//Creates the content for the page including DOCTYPE.
require_once ('functions.php');
echo makePageStart('Admin', 'style.css', "gridContainer");
echo makeHeader("northEvents - Credits");
echo makeNavMenu("Links", array("index.php" => "Home", "bookEventsForm.php" => "Book Events", "admin.php" => "Admin", "credits.php" => "Credits"));
echo makeLogin('loginProcess.php', 'logout.php');
echo startMain();
?>
    <h3>Credits</h3>
    <div id="credits">
        <h4 id="name">Name: Grant Allenby</h4>
        <h4 id="uniID">Uni ID: w18013678</h4>
        <h4>Sources:</h4>
        <p class="sourceTitle">JavaScript information <a href="https://librarysearch.northumbria.ac.uk/primo-explore/fulldisplay?docid=44UON_ALMA2122585020003181&context=L&vid=northumbria&lang=en_US&search_scope=default_scope&adaptor=Local%20Search%20Engine&tab=default_tab&query=any,contains,991003567649703181">(Ducket, et al., 2014)</a></p>
        <p class="sources">
            Ducket, J., Ruppert, G. & Moore, J., 2014. JavaScript & jQuery: interactive front-end web <br>
            development. 1st ed. Indianapolis, IN: John Wiley & Sons, Inc.
        </p>
        <p class="sourceTitle">Favicon.ico logo <a href="https://publicdomainvectors.org/photos/circustent.png">(Openclipart, 2017)</a></p>
        <p class="sources">
            Openclipart, 2017. publicdomainvectors.org. [Online]<br>
            Available at: https://publicdomainvectors.org/photos/circustent.png<br>
            [Accessed 07 November 2019].<br>
        </p>
        <p class="sourceTitle">PHP Form Processing <a href="https://www.dawsonera.com/readonline/9781449365844">(Tatroe, et al., 2013)</a></p>
        <p class="sources">
            Tatroe, K., Lerdord, R. & Macintyre, P., 2013. Programming PHP. 1st ed. Beijing: O'Reilly Media
        </p>
        <p class="sourceTitle">header function information <a href="https://www.w3schools.com/php/func_network_header.asp">(w3schools, 2019)</a></p>
        <p class="sources">
            w3schools, 2019. w3schools - Header(). [Online]<br>
            Available at: https://www.w3schools.com/php/func_network_header.asp<br>
            [Accessed 07 November 2019].<br>
        </p>
        <p class="sourceTitle">CSS Grid Layout Information <a href="https://www.w3schools.com/css/css_grid.asp">(w3schools, 2019)</a></p>
        <p class="sources">
            w3schools, 2019. w3schools - CSS Grid Layout. [Online]<br>
            Available at: https://www.w3schools.com/css/css_grid.asp<br>
            [Accessed 07 November 2019].<br>
        </p>
</div>
<?php
echo endMain();
echo makeFooterStart();
echo makeFooterTag("created by Grant A w18013678");
echo makeFooterEnd();
echo makePageEnd();
?>