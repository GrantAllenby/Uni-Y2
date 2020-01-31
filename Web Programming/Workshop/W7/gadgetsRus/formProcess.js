window.addEventListener('load', function() {
    'use strict';
    //alert("Hey fam was BoBBin' B, I was just wondering what you doing famalam. -dabs-");

    //keeps the form so we can use it whenever we want
    const l_form = document.getElementById('orderForm');

    function calculateTotal() {
        let l_total = 0;

        //get list of adverts
        const l_adverts = l_form.querySelectorAll('section.advert');
        const l_advertsCount = l_adverts.length;

        //Loops through the adverts
        for (let t_i = 0; t_i < l_adverts.length; t_i++) {
            const t_advert = l_adverts[t_i];
            const t_checkbox = t_advert.querySelector('input[data-value][type=checkbox]');
            //alert(t_checkbox.dataset.value);

            if (t_checkbox.checked) {
                l_total = parseFloat(t_checkbox.dataset.value);
            }
        }//for
        l_form.total.value = l_total;

        const c_vat = document.getElementById('vat');
        let l_vat = 0;
        c_vat.innerHTML = l_vat;
        l_vat.toFixed(2);

        let l_grandTotal = document.getElementsByName("grandTotal");

        let l_delivery = 0;
        let l_deliveruesCount = l_deliveries.length;

        for(let t_i = 0; t_i < l_deliveries.length; t_i++) {
            const t_delivery = l_deliveries[t_i];
            const t_radio = t_delivery.querySelector('input[name=area][type=radio]');

            if(t_radio.checked) {
                l_delivery = parseFloat(t_radio.dataset.value);
            }

            l_total = l_total + l_delivery;
        }
        if (l_form.area.value === "UK") {
            l_vat = 3.95;
        }
        else if(l_form.area.value ==="EU") {
            l_vat = 5.95;
        }
        else {
            l_vat = 10.95;
        }

        l_grandTotal = l_vat + l_total;

        l_grandTotal.toFixed(2);

    }

    l_form.CheckValue.onclick = calculateTotal;

    function checkForm(_evt){
        alert("checking form");
        _evt.preventDefault();
    }//checkForm()

    if (l_form.hasreadterms.checked == false) l_failed = true;
});

