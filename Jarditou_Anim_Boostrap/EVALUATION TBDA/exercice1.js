// EEXRCICE 1       NOMBRE DE JEUNES, DE MOYENS ET DE VIEUX
function exercice1() {
  let jeunes = 0;
  let moyens = 0;
  let vieux = 0;
  let age = 0;
  let tab = [];
  //let personnesrentrees=jeunes+moyens+vieux;
  //var premierbouton = document.getElementById(boutonexo1);

  while (true) {
    // While = tant que...
    age = parseInt(prompt("Entrer un âge")); //La fonction parseInt() analyse une chaîne de caractère fournie en argument et renvoie un entier exprimé dans une base donnée.
    if (age <= 20) {
      jeunes++;
    }
    if (age > 20 && age <= 40) {
      moyens++;
    }
    if (age > 40) {
      vieux++;
    }
    if (age >= 100) {
      //vieux++;
      tab.push(age); //La méthode push() ajoute un ou plusieurs éléments à la fin d'un tableau et retourne la nouvelle taille du tableau.
      break; //L'instruction break permet de terminer la boucle en cours ou l'instruction switch ou label en cours et de passer le contrôle du programme à l'instruction suivant l'instruction terminée.
    } else {
      tab.push(age);
    }
  }

  console.log(tab);
  console.log(
    "Il y a " +
      jeunes +
      " jeune.s, " +
      moyens +
      " moyens.s ntre 20 à 40 ans, " +
      vieux +
      "  vieux de 41 et plus."
  );
  // A tester pour avoir le nombre de personnes rentrées window.alert("sur" +personnesrentrees+"il y a " + jeunes + " jeune.s, \n" + moyens + " moyens.s entre 20 à 40 ans, \n& " + vieux + " vieux de 41 et plus.");
  window.alert(
    "Il y a " +
      jeunes +
      " jeune.s, \n" +
      moyens +
      " moyens.s entre 20 à 40 ans, \n& " +
      vieux +
      " vieux de 41 et plus."
  );
}
