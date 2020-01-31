/**
 * Created by w18013678 on 03/12/19.
 */
window.addEventListener('load', function () {
    "use strict";
    const URL_ANIMALS = 'animals.php';
    const URL_ANIMALS_XML = 'animals.php?xml';
    const URL_ANIMALS_JSON = 'animals.php?json';
    const URL_CATAPI = 'https://api.thecatapi.com/v1/images/search';

    function fetchImg(elem, url, isJSON, displayImg) {
        fetch(url)
            .then(
                function (response) {
                    if(isJSON) {
                        return response.json();
                    } else {
                        return response.text();
                    }
                })
            .then(
                function (data) {
                    console.log(data);
                    displayImg(elem, data);
                })
            .catch(
                function (err) {
                    console.log("Something went wrong!", err);
                });
    }

    let displayImgHTML = function(elem, data) {
        document.getElementById(elem).innerHTML = data;
    };

    let displayImgXML = function(elem, data) {
        let parser = new DOMParser();
        let xmlDoc = parser.parseFromString(data,"text/xml");
        let img = xmlDoc.getElementsByTagName("img")[0].firstChild.data ;
        document.getElementById(elem).innerHTML =
            "<img src=\"img/" + img + "\">";
    };

    let displayImgJSON = function(elem, data) {
       document.getElementById(elem).innerHTML =
           "<img src=\"img/" + data.img + "\">";
    };

    let displayImgCatAPI = function(elem, data) {
        document.getElementById(elem).innerHTML =
            "<img src=\"https://cdn2.thecatapi.com/images/" + data.img + "\">";
    };

    fetchImg("img1", URL_ANIMALS, false, displayImgHTML);
    fetchImg("img2", URL_ANIMALS_XML, false, displayImgXML);
    fetchImg("img3", URL_ANIMALS_JSON, true, displayImgJSON);
    fetchImg("img4", URL_ANIMALS_JSON, true, displayImgJSON);
    fetchImg("img5", URL_ANIMALS_JSON, true, displayImgJSON);
    fetchImg("img6", URL_CATAPI,true, displayImgCatAPI);
    setInterval( function(){ fetchImg("img4", URL_ANIMALS_JSON, true, displayImgJSON) }, 2000);
    document.getElementById("img5").onclick = function(){fetchImg("img5", URL_ANIMALS_JSON, true, displayImgJSON)};


});