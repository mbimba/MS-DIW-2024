// EXERCICE 2   TABLE DE MULTIPLICATION  par 7

function exercice2() {
  var resultat = ""; //on déclare le résultat
  var nombre = parseInt(
    window.prompt(
      "Entrer un nombre pour afficher votre table de multiplication"
    )
  ); //Je demande un nombre à l'utilisateur

  for (
    i = 1;
    i <= 5;
    i++ //on commence à 1 ensuite on fait +1 jusqu'à temps que i est égal à 5
  ) {
    var calculmultiplication = nombre * i; // on multiplie l'entrée nombre par i qui va partir de 1 et aller jusqu'à 5
    resultat += nombre + "*" + i + "=" + calculmultiplication + "<br>"; //on affiche à chaque multiplication. Pour créer un saut de ligne "break" en JavaScript, on utilise "<br>". Avec cela, nous pouvons également ajouter plus d’un saut de ligne.
  }

  document.write(resultat); //Le résultat final est affiché.
}
