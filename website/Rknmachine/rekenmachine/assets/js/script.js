let isLastCommandButton2 = false;
let scherm = document.getElementById("scherm")
let knoppen = document.getElementsByClassName("button")
let Button2 = document.getElementsByClassName("Button2")
for (let i = 0; i < knoppen.length; i++) {
    let knop = knoppen[i];
    knop.addEventListener("click", knopGeklikt);
}

for (let i = 0; i < Button2.length; i++) {
    let knop = Button2[i];
    knop.addEventListener("click", specialKnopGeklikt);
}




function knopGeklikt(event) {
    switch(event.currentTarget.id) {
        case "nul":      scherm.value += "0";                  break;
        case "een":      scherm.value += "1";                  break;
        case "twee":     scherm.value += "2";                  break;
        case "drie":     scherm.value += "3";                  break;
        case "vier":     scherm.value += "4";                  break;
        case "vijf":     scherm.value += "5";                  break;
        case "zes":      scherm.value += "6";                  break;
        case "zeven":    scherm.value += "7";                  break;
        case "acht":     scherm.value += "8";                  break;
        case "negen":    scherm.value += "9";                  break;
        case "leeg":     scherm.value = "";                    break;
        case "is": {
            if (isLastCommandButton2) {
                scherm.value = scherm.value.substring(0, scherm.value.length - 1);
            }
            scherm.value = eval(scherm.value);
            break;
        }
        default: break;
    }
    isLastCommandButton2 = false;
}

function specialKnopGeklikt(event) {
    if (!isLastCommandButton2 && scherm.value.length > 0) {
        switch(event.currentTarget.id) {
            case "optellen": scherm.value += "+";                  break;
            case "vermenigvuldigen": scherm.value += "*";          break;
            case "aftrekken": scherm.value += "-";                 break;
            case "delen": scherm.value += "/";                     break;
            case "punt":  scherm.value += ".";                     break;
            default: break;
        }
        isLastCommandButton2 = true;;
    }

}

function piep() {
    document.getElementById("audio").onclick = audio.play();
}