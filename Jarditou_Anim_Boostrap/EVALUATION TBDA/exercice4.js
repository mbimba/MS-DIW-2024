//      EXERCICE 4 TOTAL D'UNE COMMANDE
/*
    var PU = window.prompt("Saississez le prix unitaire PU de l'article");
    var QTECOM = window.prompt("Entrez la quantité commandée")
    var TOT= PU*QTECOM
    let remiseREM = 0
    let fraisdeport = 2
    let calculfraisdeport=2
    let prixàpayerPAP=0
    let reduction=0
    let TOTAL=0
*/
function exercice4() {
  var PU = window.prompt("Saississez le prix unitaire PU de l'article");
  var QTECOM = window.prompt("Entrez la quantité commandée");
  var TOT = PU * QTECOM;
  let remiseREM = 0;
  let fraisdeport = 2;
  let calculfraisdeport = 2;
  let prixàpayerPAP = 0;
  let reduction = 0;
  let TOTAL = 0;
  var exo4 = document.getElementById("boutonexo4").value;
  if (QTECOM > 0) {
    if (TOT >= 100 && TOT <= 200) {
      //L'opérateur "ET logique (&&)" renvoie vrai si et uniquement si ses deux opérandes sont "true" ou équivalents à "true". Il est utilisé généralement avec des valeurs booléennes et, quant c'est le cas, il renvoie une valeur booléenne. Toutefois, l'opérateur && renvoie en fait la valeur d'un de ses opérandes et, si cet opérateur est utilisé avec des valeurs non-booléennes, il renverra une valeur non-booléenne.
      // Si TOT est compris entre 100 et 200 euros, il y a une réduction de 5%.  Si TOT est inférieur à 100 euros il faudra payer la totalité des frais de port.
      remiseREM = 5;
    } else if (TOT > 200 && TOT < 500) {
      //Si TOT est supérieur à 200 euros, il y a une réduction de 10%.  Mais TOT doit être inférieur à 500 euros pour la remise de 10%. Sinon frais de port de 2%.

      remiseREM = 10;
    }
    //else if (TOT >= 500)
    if (TOT >= 500) {
      // si TOT est supérieur à 500 euros, les frais de port sont gratuits et le client bénéficie d'une remise de 10%.
      remiseREM = 10;
      fraisdeport = 0;
    }

    if (fraisdeport != 0) {
      // si frais de port différent de 0
      calculfraisdeport = (TOTAL * fraisdeport) / 100; // //On calcule les frais de port
    }

    if (calculfraisdeport < 6 && fraisdeport == 2) {
      //L'opérateur d'égalité (==) vérifie si ses deux opérandes sont égaux et renvoie un booléen indiquant le résultat de la comparaison. À la différence de l'opérateur d'égalité stricte, l'opérateur d'égalité tente de convertir ses opérandes avant la comparaison si ceux-ci sont de types différents.
      //Dans cette partie, //si le calcul des frais de port donne un chiffre inférieur à 6€ et que port est de 2% du coup on applique le tarif minimum du port.
      calculfraisdeport = 6;
    } else {
      calculfraisdeport = 0; //Si le port est de 0% du coup, on donne 0 euro comme frais de port.
    }
    reduction = (TOT * remiseREM) / 100; //On calcule la réduction
    TOTAL = parseFloat(TOT) - parseFloat(reduction); // On a la valeur de TOT - la réduction. La fonction parseFloat() permet de transformer une chaîne de caractères en un nombre.
    prixàpayerPAP = parseFloat(TOTAL) + parseFloat(calculfraisdeport); // Pour savoir le prix à payer, on additionne donc les frais de port au TOTAL.
    document.write(
      "Remise " +
        remiseREM +
        "% (-" +
        reduction +
        "€) soit (" +
        TOTAL +
        "€) et frais de port = " +
        fraisdeport +
        "% soit (" +
        calculfraisdeport +
        "€); le total à payer: " +
        prixàpayerPAP +
        "€"
    );
  } else {
    document.write(
      "Vous ne pouvez pas saisir " +
        QTECOM +
        " produit. La quantité ne peut pas être = 0. Recommencez, car il y a une erreur"
    ); //Cette condition permet d'alerter l'utilisateur sur le fait que la quantité ne peut pas être égale à zéro.
  }
}

//    var exercice4= document.getElementById("boutonexo1");
