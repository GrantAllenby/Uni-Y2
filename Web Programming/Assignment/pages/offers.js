window.addEventListener("load", function () {
    "use strict";

    const c_URL_OffersHTML = "getOffers.php";
    const c_URL_OffersXML = 'getOffers.php?useXML';

    function fetchOffersHTML(){
        fetch(c_URL_OffersHTML)
            .then(
                function(response){
                    return response.text();
                })
            .then(
                function(l_data){
                    document.getElementById("specialOfferHTML").innerHTML = l_data;
                })
            .catch(
                function(l_err) {
                    console.log("An error has occurred: ", l_err);
                });
    }


    function fetchOffersXML(){
        fetch(c_URL_OffersXML)
            .then(
                function(l_response){
                    return l_response.text();
                })
            .then(
                function(l_data) {
                    let l_parser = new DOMParser();
                    let l_xmlDoc = l_parser.parseFromString(l_data,"text/xml");
                    let l_offer1 = l_xmlDoc.getElementsByTagName("eventTitle")[0].innerHTML;
                    let l_offer2 = l_xmlDoc.getElementsByTagName("catDesc")[0].innerHTML;
                    let l_offer3 = l_xmlDoc.getElementsByTagName("eventPrice")[0].innerHTML;
                    document.getElementById("specialOfferXML").innerHTML =
                        "<h2>“" + l_offer1 + "”</h2>"
                        + "<p>" + "Category: " + l_offer2 + "<br>"
                        + "price: " + l_offer3 + "</p>";
                })
    }

    fetchOffersXML();
    fetchOffersHTML();
    setInterval(function(){fetchOffersHTML()}, 5000);

});