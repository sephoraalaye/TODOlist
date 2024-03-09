let saisie = document.getElementById("saisie");
let modifiericon= document.getElementById("iconModifier")
let saveicon= document.getElementById("iconSave")
function modifier(event){
    // Empêcher le formulaire de se soumettre automatiquement
    event.preventDefault();
    saisie.removeAttribute("disabled");
    saisie.autofocus="true";
    modifiericon.classList.add("dnone");
    saveicon.classList.remove("dnone");

}

console.log(saisie)

