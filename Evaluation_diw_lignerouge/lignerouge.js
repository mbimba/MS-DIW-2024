/*          ****************** Mes boutons carousel précédent et suivant sur la page catégorie et tous les plats  *************************   */
function precedent()
{
document.getElementById("carouselcatprec").click();
}

function suivant()
{
document.getElementById("carouselcatsuiv").click();
}


/*          ****************** ICI    JAVASCRIPT DE LA PAGE CONTACT            *************************   */
function envoi() {
 // test lenom ()
 var nom = document.getElementById("lenom").value;
  var codenom = /^[A-Za-z]+$/;
  resultatnom = codenom.test(nom);
  if (resultatnom == false) {
    alert("Veuillez compléter le nom");
    codenom.lastIndex;
  }


//test leprenom ()

var prenom = document.getElementById("leprenom").value;
  var codeprenom = /^[A-Za-z]+$/;
  resultatprenom = codeprenom.test(prenom);
  if (resultatprenom == false) {
    alert("Veuillez remplir la case Prénom");
  
  }

//test email ()

var mail = document.getElementById("email").value;
filtremail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
resultatmail = filtremail.test(mail);
if (resultatmail == false) {
  alert("Saisissez une adresse mail avec un @");

}

//test tel ()
var phone = document.getElementById("tel").value;
var codetel= /^0[1-9]([-. ]?[0-9]{2}){4}$/;
resultatphone= codetel.test(phone);
if(resultatphone == false) {
    alert("Veuillez saisir un numéro de téléphone");
    return false;
}

//test votredemande()
var demande = document.getElementById("votredemande").value;
var codedemande = /^[0-9A-Za-z]+$/;             // J'ai utilisé un regex alphanumérique qui accepte chiffre et lettre 
resultatdemande= codedemande.test(demande);
if(resultatdemande == false){
    alert("N'oubliez pas de saisir la demande");
    return false;
}




}       // Fin function nom ()