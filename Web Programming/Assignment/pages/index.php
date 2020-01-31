<?php
//Creates the content for the page including DOCTYPE.
require_once('functions.php');
echo makePageStart("northEvents", "style.css", "gridContainerHome");
echo makeHeader("northEvents - Home");
echo makeNavMenu("Links", array("index.php" => "Home", "bookEventsForm.php" => "Book Events", "admin.php" => "Admin", "credits.php" => "Credits"));
echo makeLogin('loginProcess.php', 'logout.php');
?>
    <script src="offers.js"></script>
    <main>
        <h3>Welcome to NorthEvents</h3>
        <p id='welcomeMessage'>Please feel free to browse our site to see what we have to offer.</p>
        <div id='aboutUs'>
            <h3>Who are we?</h3>
            <p id='aboutUsMessage'>
                We are an up and coming events organiser, based in the North East. We have an assortment of different
                events
                to choose from for you to book and view. From events such as carnivals, theatres, festivals, sports,
                comedy nights and activities
                such as family outings, music events, dance events and exhibition events, there's really no lack of
                choice available from us.
            </p>
        </div>
    </main>
    <aside id='offers'>
        <h4 class='getOffersHeader'>Offers</h4>
        <div id="specialOfferHTML">
        </div>
    </aside>
    <aside id='XMLOffers'>
        <h4 class='getOffersHeader'>XML Offers</h4>
        <div id="specialOfferXML">
        </div>
    </aside>

<?php
echo makeFooterStart();
?>
<?php
echo makeFooterTag("created by Grant A w18013678");
echo makeFooterEnd();
echo makePageEnd();