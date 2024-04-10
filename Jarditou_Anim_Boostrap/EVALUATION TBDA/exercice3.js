//      EXERCICE 3 RECHERCHE D'UN PRENOM
function exercice3 ()
{
    var tab = ["Audrey",  "Aurélien",  "Flavien",  "Jérémy",  "Laurent",  "Melik",  "Nouara",  "Salem",  "Samuel", "Stéphane"];// Mon tableau de départ.
    var malistedeprenoms = window.prompt("voici la liste des prénoms "+tab+". Entrez le prénom à effacer en respectant les majuscules, minuscules et accents.")// notre fenetre de saisi du prénom
    
        document.write("Voici la liste de départ "+tab+"<br><br>")    //En Javascript, on peut écrire avec document.write directement dans le DOM. <br> permet de revenir à la ligne pour la liste ou le tableau.
    var prenomretire = String(malistedeprenoms).charAt(0).toUpperCase() + String(malistedeprenoms).slice(1).toLowerCase();// on met la premiére lettre en majuscule et le reste du mot en minuscule. 
    //La méthode "toLowerCase" retourne la chaîne de caractères courante en minuscules. La méthode "toUpperCase" retourne la valeur de la chaîne courante, convertie en majucules. 
    //Un objet "string" est utilisé dans le but de représenter et de manipuler une chaîne de caractères.
    
    //maintenant on lance la recherche l'effacement et le retour du tableau
    if(tab.includes(prenomretire))// on lance la recherche du mot saisi par "prenomretire"
    {
    
        tab.splice(tab.indexOf(prenomretire),1);// on supprime par rapport l'index. La méthode "splice" modifie le contenu d'un tableau en retirant des éléments et/ou en ajoutant de nouveaux éléments à même le tableau. On peut ainsi vider ou remplacer une partie d'un tableau. "Indexof" permet de trouver l'index d'un élément dans le tableau.
        //La méthode indexOf() renvoie le premier indice pour lequel on trouve un élément donné dans un tableau. Si l'élément cherché n'est pas présent dans le tableau, la méthode renverra -1.
        tab.push(" ");//on le remplace par un espace vide. 
        //La méthode "push" ajoute un ou plusieurs éléments à la fin d'un tableau et retourne la nouvelle taille du tableau. Dans cet exercice, il permet de rajouter un espace vide à cause du prénom supprimé de la liste.
    
        alert("Voici la nouvelle liste "+tab)//on affiche le résultat
        console.log(tab)//on affiche dans la console le résultat
            document.write("Voici la nouvelle liste "+tab)
    }
    else
    {
        alert("Je n'ai pas trouvé le prénom saisi dans la liste")
        console.log(tab)//on affiche dans la console le résultat
    }
}
//fin 
