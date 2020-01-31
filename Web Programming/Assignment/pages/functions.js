window.addEventListener("load", function () {
    "use strict";
    const c_form = document.getElementById("bookingForm"); //Creates a reference to the form.

    const c_customerType = document.querySelector("[name=customerType]"); // selects the customer type selection box.

    const c_retCustomerDetails = document.getElementById("retCustDetails"); //Creates reference to customer details.
    const c_customerDetailsForename = c_retCustomerDetails.querySelector("input[name=forename]"); // selects the customer forename text box.
    const c_customerDetailsSurname = c_retCustomerDetails.querySelector("input[name=surname]"); // selects the customer surname text box.

    const c_tradeCustomerDetails = document.getElementById("tradeCustDetails"); //creates reference to trade customer details.
    const c_companyName = c_tradeCustomerDetails.querySelector("input[name=companyName"); //selects the company name text box.

    const c_termsText = document.getElementById("termsText"); //Creates reference to the terms text.
    const c_termsCheck = c_termsText.querySelector("[type=checkbox]"); // selects the terms text checkbox.

    const c_submitButton = document.querySelector("[name=submit]"); //selects the submit button.

    let l_formFilled = false; //the form is not filled.
    let l_eventSelected = false; //an event is not selected.

    function calculateTotal() {
        let l_total = 0; //defines l_total as 0
        let l_collectionTotal = 0; //defines l_collectionTotal as 0
        let l_checkboxCheck = 0;

        const c_items = c_form.querySelectorAll("div.item"); //get array of events
        const c_itemsCount = c_items.length; //get length of the array

        //Loops through the items array
        for (let t_i = 0; t_i < c_itemsCount; t_i++) {
            const t_item = c_items[t_i];
            const t_checkbox = t_item.querySelector("input[data-price][type=checkbox]");

            if (t_checkbox.checked) {
                l_total = l_total + parseFloat(t_checkbox.dataset.price); //changes the string for the price into a number.
                l_checkboxCheck = 1;
            } //end of else if
        }//end of for

        if(l_checkboxCheck === 1) {
            l_eventSelected = true;
        }
        else {
            l_eventSelected = false;
            c_submitButton.disabled = true;
        }

        const c_radio = c_form.querySelector("input[data-price][type=radio]");
        if (c_radio.checked) {
            l_collectionTotal = l_collectionTotal + parseFloat(c_radio.dataset.price); //changes the string for the price into a number.
        }

        l_collectionTotal.toFixed(2);
        let l_grandTotal = l_total + l_collectionTotal; //combines delivery and total.

        l_grandTotal.toFixed(2);

        c_form.total.value = "£" + l_grandTotal; //sets the total in the form to the grand total variable.
    }

    function formFilled() {
        //if customer details are filled, change form filled to true.

        //also checks the customer type for either ret or company.
        if (c_customerType.value === "ret") {
            c_tradeCustomerDetails.style.visibility = "hidden";
            c_retCustomerDetails.style.visibility = "visible";

            c_companyName.required = false;

            if (c_customerDetailsForename.value !== "" && c_customerDetailsSurname.value !== "") {
                l_formFilled = true;
            } else if (c_customerDetailsForename.value === "" || c_customerDetailsSurname.value === "") {
                l_formFilled = false;
                c_submitButton.disabled = true;
            }
        }
        if (c_customerType.value === "trd") {
            c_tradeCustomerDetails.style.visibility = "visible";
            c_retCustomerDetails.style.visibility = "hidden";
            c_companyName.required = true;

            if (c_companyName.value !== "") {
                l_formFilled = true;
            } else if (c_companyName.value === "") {
                l_formFilled = false;
                c_submitButton.disabled = true;
            }
        }
    }

    function termsText() {
        //Changes text if terms agreed
        if (c_termsCheck.checked) {
            c_termsText.style.color = "black";
            c_termsText.style.fontWeight = "normal";

        } else if (c_termsCheck.checked === false) {
            c_termsText.style.color = "red";
            c_termsText.style.fontWeight = "bold";
            c_submitButton.disabled = true;

        }
    }

    function submitButton() {
        //if terms is agreed, and form is filled, enable submit button
        if (c_termsCheck.checked && l_formFilled === true && l_eventSelected === true) {
            c_submitButton.disabled = false;
        }
    }


    c_form.addEventListener("change", calculateTotal);
    c_form.addEventListener("change", formFilled);
    c_form.addEventListener("change", termsText);
    c_form.addEventListener("change", submitButton);
});