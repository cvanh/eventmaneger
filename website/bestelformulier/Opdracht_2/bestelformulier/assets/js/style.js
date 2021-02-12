var formulier = document.getElementById("form-id")
var error = document.getElementById("form-error")
var goedgekeurd = document.getElementById("form-goedgekeurd")
var aanhef = document.getElementById("aflever_aanhef")
var voornaam = document.getElementById("aflever_voornaam")
var achternaam = document.getElementById("aflever_achternaam")
var straat = document.getElementById("aflever_straat")
var huisnummer = document.getElementById("aflever_huisnummer")
var postcode = document.getElementById("aflever_postcode")
var plaats = document.getElementById("aflever_woonplaats")
var email = document.getElementById("email")
var land = document.getElementById("aflever_land")
var telefoonnummer = document.getElementById("telefoon")
var voorwaarden = document.getElementById("algvw")
var submitbutton = document.getElementById("submit")
error.hidden = true

var factuuraanhef = document.getElementById("factuur_aanhef")
var factuurvoornaam = document.getElementById("factuur_voornaam")
var factuurachternaam = document.getElementById("factuur_achternaam")
var factuurstraatnaam = document.getElementById("factuur_straat")
var factuurhuisnummer = document.getElementById("factuur_huisnummer")
var factuurpostcode = document.getElementById("factuur_postcode")
var factuurplaats = document.getElementById("factuur_woonplaats")
var factuurland = document.getElementById("factuur_land")


formulier.addEventListener("submit", function (event) {
    error.innerHTML = ""
    event.preventDefault()
    if (aanhef.value != ""
        && voornaam.value != ""
        && achternaam.value != ""
        && straat.value != ""
        && huisnummer.value != ""
        && postcode.value != ""
        && plaats.value != ""
        && email.value != ""
        && land.value != ""
        && telefoonnummer.value != ""
        && voorwaarden.value != ""
        && factuuraanhef.value != ""
        && factuurvoornaam.value != ""
        && factuurachternaam.value != ""
        && factuurstraatnaam.value != ""
        && factuurhuisnummer.value != ""
        && factuurpostcode.value != ""
        && factuurplaats.value != ""
        && factuurland.value != ""
    ) {
        //verstuur
        goedgekeurd.innerHTML = "formulier is goed ingevuld"
        error.hidden = true;
        goedgekeurd.hidden = false;
    }
    else {

        error.hidden = false;
        goedgekeurd.hidden = true;

        if (voornaam.value == "") {
            error.innerHTML += "Uw voornaam is niet ingevoerd<br>"
        }

        if (achternaam.value == "") {
            error.innerHTML += "Uw achternaam is niet ingevoerd<br>"
        }

        if (straat.value == "") {
            error.innerHTML += "De straatnaam is niet ingevoerd<br>"
        }

        if (huisnummer.value == "") {
            error.innerHTML += "Het huisnummer is niet ingevoerd<br>"
        }

        if (postcode.value == "") {
            error.innerHTML += "Uw postcode is niet ingevoerd<br>"
        }

        if (plaats.value == "") {
            error.innerHTML += "De plaats is nog niet ingevoerd<br>"
        }

        if (email.value == "") {
            error.innerHTML += "Uw email is nog niet ingevoerd<br>"
        }

        if (land.value == "") {
            error.innerHTML += "Het land is nog niet ingevuld<br>"
        }

        if (telefoonnummer.value == "") {
            error.innerHTML += "Uw telefoonnummer is nog niet ingevuld<br>"
        }

        if (voorwaarden.value == true) {
            error.innerHTML += "U bent nog niet akkoord gegaan met de algemene voorwaarden<br>"

        }
        
        if (factuuraanhef.value == "") {
            error.innerHTML += "U heeft de factuur aanhef nog niet ingevult<br>"
        }

        if (factuurvoornaam.value == "") {
            error.innerHTML += "U heeft de factuurvoornaam nog niet ingevuld<br>"
        }

        if (factuurachternaam.value == "") {
            error.innerHTML += "U heeft de vactuurachternaam nog niet ingevuld<br>"
        }

        if (factuurstraatnaam.value == "") {
            error.innerHTML += "U heeft de factuurstraatnaam nog niet ingevuld<br>"
        }

        if (factuurhuisnummer.value == "") {
            error.innerHTML += "U heeft het factuurhuisnummer nog niet ingevuld<br>"
        }

        if (factuurpostcode.value == "") {
            error.innerHTML == "U heeft uw factuurpostcode nog niet ingevul<br>"
        }

        if (factuurplaats.value == "") {
            error.innerHTML += "U heeft uw factuurplaats nog niet ingevuld<br>"
        }

        if (factuurland.value == "") {
            error.innerHTML += "U heeft uw factuurland nog niet ingevuld"
        }
    }


}); 