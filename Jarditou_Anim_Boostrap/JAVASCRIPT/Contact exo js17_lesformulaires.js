// document.["Contact exo js17_lesformulaires.js"]

//societe.length=1;
//console.log(soc);
//console.log(societe.length);
//var societe= document.getElementById("societe").value;
//var formValid = document.getElementById("boutondenvoi").value;
//var contact = document.getElementById("Personneacontacter").value;
//var choixvalid = /^[A-Za-z]+$/;
//var choice = document.getElementById("selection").value;
//var codepostal= document.getElementById("code").value;
//var codepostal=/^[0-9]*$/
//var ville= document.getElementById("ville").value;
//var mail = document.getElementById("email").value;
//var mail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/

function testsociete() {
  var societe = document.getElementById("societe").value;
  var choixvalid = /^[A-Za-z]+$/;
  result = choixvalid.test(societe);
  if (societe == false) {
    alert("Renseigner le nom de la societé");
    choixvalid.lastIndex;
    return false;
  }
  //test personne a contacter
  var contact = document.getElementById("Personneacontacter").value;
  var choixvalid = /^[A-Za-z]+$/;
  result = choixvalid.test(contact);
  if (result == false) {
    alert("Saisissez le nom d'une personne à contacter");
    return false;
  }
  // test code postal
  var Codepostal = document.getElementById("code").value;
  codep = /^([0-9]{5})*$/;
  result2 = codep.test(Codepostal);
  if (Codepostal == false) {
    alert("Saisissez un code postal à 5 chiffres");
    return false;
  }
  //test ville
  var ville = document.getElementById("ville").value;
  ville = /^[A-Za-z]+$/;
  result = ville.test(ville);
  if (result == false) {
    alert("Saisissez le nom de la ville");
    return false;
  }
  //test email
  var mail = document.getElementById("email").value;
  mail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
  result = mail.test(ville);
  if (result == false) {
    alert("Saisissez une adresse mail avec un @");
    return false;
  }
}
var selec = document.getElementById("selection"); // dans html, j'ai créé un id "selection" pour le menu déroulant. Cette fonction va me permettre de faire disparaitre "choisissez" une fois qu'une sélection est faite.
var choix = document.getElementById("choix");
selec.addEventListener("change", () => {
  choix.remove();
});

/*---------------
function    testcodepostal()              //pour tester le code postal
{
    var filtre = /[0-9]{5}/;
    var CP = document.getElementById("code").value;
    var result = filtre.test(CP);
    if(!filtre.test(CP))
        alert("Rensiegner un code postal valide (exemple : 75000)"//);
    filtre.lastIndex;
}
----------------------
function    testmail()      //pour tester le mail
{
    var filtre = /[@]{1}/;
    var mail = document.getElementById("email").value;
    var result = filtre.test(mail);
    if(!filtre.test(mail))
        alert("Email non valide, comprenant au moins '@'");
    filtre.lastIndex;
}
----------------------
function    ad()
{
    var choice = document.getElementById("selection").value;

    if (choice != "choix")
        document.getElementById("textarea").innerHTML = choice;
}
*/
