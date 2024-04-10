// fichier script.js

/*
// Test         partie 3    afficher texte
alert("Hello 1'AFPA!");

var nom = "Triomphe";
var aide = "En quoi puis-je t'aider?";
window.alert("Bonjour");
window.alert(nom);
window.alert(aide);

var tutu = prompt("Saisissez la longueur");
var toto = prompt("Saisissez la largeur");

console.log("la longueur est de :" + tutu + " mètres");
console.log("la largeur est de :" + toto + " mètres");

---------------------------------------------------------
 // Exercices    partie 3        afficher texte
var nom, prenom;

nom = prompt("Saisissez votre nom");
prenom = prompt ("Saisissez votre prénom");

alert(nom + " " + prenom);


var nb1, nb2;
nb1 = prompt("Entrez un 1er nombre");
nb2 = prompt("Entrez un 2è nombre");
console.log(nb1*nb2);


--------------------------------------------
// Exercices        partie 3 afficher texte convertir température 
let c,f;
c = prompt("Saisissez la température en ° Celcius");
f = ((c*(9/5)) + 32)
alert ("La température en ° Fahrenheit est " + f);



 // Exercices partie 3 afficher texte convertir température !!! Autre méthode !!!
var temperatureenCaconvertir = prompt("Entrez la température en Celsius")
console.log(temperatureenCaconvertir*9/5+32)

-----------------------------------

//      Exercice d'entrainement perso
let admin, name;
name="john";
admin=name;
alert(admin);

let planet
name="terre";
alert(name);


let monage = 42
console.log(monage)
const monprenom = "triomphe"
console.log(monprenom)



const a = 100 ;
const b = 100 ;
const c = a+b ;
console.log(c);

---------------------


let a;
a = 220;
a = a + a ;


--------------------------
let d = 200
d = d + 10
console.log(d);

let e= 200
e += 10      ===    e = e + 10
e -= 10      ===    e = e - 10
e *= 10      ===    e = e * 10
e ++         ===    e + 1
e --         ===    e - 1
console.log(e)

---------------------------------------------
//La concaténation   openclassroom TD
let premierePartie = "Mon nom est Bond"
let deuxiemePartie = ", James Bond."
let punchline = premierePartie + deuxiemePartie
console.log(punchline)
// punchline vaut “Mon nom est Bond, James Bond.”


-----------------------------------------------

// Les opérateurs OPenclassroom TD
let totallivres = 500;
totallivres += 50;
totallivres -= 10;
totallivres+=5;
console.log(totallivres)

let affichagetotallivres = "Notre bibliothèque possède "
affichagetotallivres += totallivres
affichagetotallivres += " livres."
console.log(affichagetotallivres)

----------------------------------------------

//Exercices             /partie 4 Les opérateurs
let a, b, c, d;
a ="100";  //une chaîne de caractères est entre doubles quotes
b = 100
c = 1.00
d = true

let b = a-- ; //sans les quotes c'est un nombre
c += a;
d = faux;
console.log(d)


//-----------------------------------------------------


let a, b, c, d;
a = "100";  //une chaîne de caractères est entre doubles quotes
b = 100
c = 1.00
d = true

//let b = a-- ; //sans les quotes c'est un nombre
//c += a;
//d = faux;
console.log("Ceci est une chaîne de caractères : " + a)
console.log("Valeur de b : " + b)
b--
console.log("on applique -- à b : " + b)


console.log("Valeur de c : " + c)
c+=a // c = c + a
console.log("on applique +=a à c : " + c)


console.log("Valeur de d : " + d)
d = !(d)
console.log("on inverse d : " + d)

----------------------------------------------
// Quelques explications  

a=prompt("entrez un chiffre")

// if (!(a === b))   console.log(age)===   if (a != b)    != correspond à "différent" ou l'inverse d'une variable

if (a == 5)      console.log(age) 
{
    alert("gagné ^_^ !!!!")
}
else{
    alert("perdu :( !!! ")
}

------------------------------------------
// Mémo: === correspond à "strictement égal"    == correspond à "à peu près égal" 
----------------------------------------------
// Exercices        partie 5 Les conditions

if (condition) {
    // Code exécuté si la condition est vraie
} else {
    // Code exécuté si la condition est fausse
}

-----------------------
/* QUELQUES TESTS       / PARTIE 5 LES CONDITIONS

t = prompt("entrez votre temperature")

if (t > 38)
{
    alert ("Le patient a de la fievre")
}

//---------------------------
if (réponse == "oui")
console.log ("Bonne reponse!");
*/

/*
permis = oui
age = prompt ("entrez votre age")
permis = prompt ("Avez vous le permis?")
if (age > 18) 
//2ème condition
if (permis == "oui")
{
    alert ("vous pouvez passer votre examen de permis de conduire")
}
*/

/*-----------------------------------------------
// Exercice 1 PARITÉ/       partie 5 "conditions"

let nbr;
nb = prompt ("entrez un nombre")
if(nbr%2 == 0)
{
    alert("Nombre pair");
}
else
{
    alert("Nombre impair");
}

*/
/*
------------------------------------------------
// Exercice 2 Age/      partie 5 "conditions"

let annee;
annee= prompt ("entrez votre année de naissance")
console.log(annee)
age=2024
if (2024-annee>=18)
{
    alert ("vous êtes majeur")
}
else{
    alert ("vous êtes mineur")
}
console.log(2024-annee)
*/
//----------------------------------------------------

/* Exercice 3 Calculette/       partie 5 "conditions"

let nb1, nb2, op, op1, op2, op3, op4;
nb1 = prompt ("entrez un premier nombre entier")
nb2 = prompt ("entrez un deuxième nombre entier")
op = prompt ("entrez un opérateur +, -, * ou /")
op1 = "+ "
op2 = "-"
op3 = "*"
op4 = "/"
switch (op =)
{

case"+";
case "-";
case"*"
case "/"
default:
    console.log("op"+"op": "message d'erreur");
}

----------------------------------
/*
if (op!=op1)
{
    alert("message d'erreur")
}
else if (op!=op2)
{
    alert ("message d'erreur")

}
/*if (! (op === op1) (op===op2)  (op===op3) (op===op4) )  
{
alert("message d'erreur")
}
-------------------------------------------------------*/

// TEST2 /           partie 6 "Les boucles"

/*
i =5
console.log (5+" * 0");

console.log("Table de multiplication par 5");
console.log("=============================");

for (i=0; i<=10; i++)
{
    resultat = 5 * i;

    console.log("5 * "+i+" = "+resultat);
}
console.log("fin de la boucle");

---------------------------------------------------------

// TEST3 /      partie 6 "Les boucles"              FOR

console.log("Table de multiplication par 5");
console.log("=============================");

for (i=0; i<=10; i++)
{
    resultat = 5 * i;

    console.log("5 * "+i+" = "+resultat);
}
// instructions exécutées après le for (i vaut 10)
console.log("fin de la boucle");

---------------------------------------------------------

// TEST4 /          partie 6 "Les boucles"    WHILE
var i = 0;

console.log("Table de multiplication par 5");
console.log("=============================");

while (i <= 10) 
{   
    // Exécute le calcul et stocke le résultat   
    // dans une variable nommée ‘resultat’  
    resultat = 5 * i;

    // A chaque tour, on affiche le résultat courant à l’utilisateur
    console.log("Le résultat de 5 x "+i+" est : "+resultat);

    // A chaque tour, on ajoute +1 à la variable i  
    i++; 
}
// instructions exécutées après le for (i vaut 10)
console.log("fin de la boucle");
--------------------------------------------------------------
// Dans cet exemple, i=1
i = 1;

while (i <= 10)
{
    // Instructions :
    console.log("Le résultat de 5 x "+i+" est : "+resultat);

    // Actualisation :
    i++;
}
--------------------------------------------------------------
i = 1;

while (i <= 10)
{
    // Instructions :
    console.log("Le résultat de 5 x "+i+" est : "+resultat);

    // Actualisation :
    i++;
}
-------------------------------------------------------
// EXERCICE 1 "SAISIE"       / Partie 6 Les boucles

let prenom =[];
for (let i = 1; i<4; i++){
    prenom [i]= prompt ("saisissez votre prénom N°"+i+" ou clic sur annuler pour arrêter la saisie");
if (prenom[i] == ""){
    break
}
console.log("prenom");
}
alert ("Les prenoms sont " + prenom +"." +prenom.length);

-------------------------------------------------------

// EXERCICE 2 "Entiers inférieurs à N"    / Partie 6 Les boucles
var n;
n = prompt ("saisir un nombre");
while (n>0)
  {
    n--;
    console.log(n)
  }

-------------------------------------------------------*/
/*
// EXERCICE 3 "Moyenne"         / Partie 6 Les boucles

var n = 1;
var somme = 0;
var i = 0;


while (n>0) {
  n = parseInt(prompt ("saisir un nombre"));
  somme += n;
  i++;
}

console.log(somme);
console.log(somme/i);
//-----------------------------------------------------
/*
// EXERCICE 4 "Multiples"          / Partie 6 Les boucles
var n,  x
n = prompt ("entrez un premier nombre")
x= prompt ("entrez un second nombre")



for (i=1; i<=n; i++)
{
    console.log(i+"x"+x+"="+(x*i));
}
console.log ("fin de la boucle");
-------------------------------------------------------

// EXERCICE 5 "Nombre de voyelles"    / Partie 6 Les boucles

var m, nombrevoyelle, compteur
m=prompt ("saisir un mot")
nombrevoyelle = "m"
compteur = nombrevoyelle++
//------------- bonne proposition EXERCICE 5 "Nombre de voyelles"    / Partie 6 Les boucles
var res;
var str = prompt("Entrez un mot en minuscule");  //str=motsaisi en minuscule = string =>voir openclassroom
var strlen = str.length;
var i = 0;
var res = 0;
//La bibliothèque string.h fournit de nombreuses fonctions dédiées aux calculs sur des chaînes. =>voir openclassroom
//  strlen (pour "string length") est une fonction qui calcule la longueur d'une chaîne de caractères (sans compter le caractère\0  ) :
while (strlen > 0)
{
    if ((motsaisi[i] == "a") || (str[i] == "e") || (str[i] == "i") || (str[i] == "o") || (str[i] == "u") || (str[i] == "y"))
        res++;
    i++;
    strlen--;
}
alert("Il y a " + res + " voyelles");
-----------------------------------------------------------
//      TEST            PARTIE 7 LES FONCTIONS
function maFonction() 
    {
     var plop1 = 123;       
       return plop1;
    }

    function maFonction2() 
    {
       plop2 = 456;     
    }

    plop1 = maFonction();

    console.log("fonction 1 / plop1 : "+plop1);

    maFonction2();

    console.log("mafonction2 > plop2 : "+plop2);

--------------------------------------------------------------
// EXERCICE 1          / PARTIE 7 LES FONCTIONS   
    //Question 1 produit  
function produit(x,y)
{
    return x*y;
}

console.log(produit(6, 7))
        //Question 2 affiche img "Voir fichier td2fonctions.html pour tester avec l'image"

-----------------------------------------------------------------
// EXERCICE 2      STRING TOKEN   / PARTIE 7 LES FONCTIONS 

    //Première proposition
function strtok(str1, str2, n){
  return str1.split(str2)[n-1]
}

var a="1wdfgjhbdfhstlshgls";    //on a un ensemble de caractères avec un séparateur qui est le h
strtok(a,"h", 2)    //le h entre guillement est le séparateur

    //Deuxième proposition
function bonjour(prenom) {
  return "Bonjour, " + prenom;
}
    //Troisième proposition
function strtok(str1, str2, n){
    return str1.split(str2)[n-1]
      }
      
var a="robert;dupont;amiens;80000";
      strtok(a,";", 2)
-------------------------------------------------------------------
//      1er TEST            PARTIE 8 LES TABLEAUX

function moyenne (x, y){                    //ON calcule la moyenne de deux notes x et Y. Moyenne= (x+y)/2       2 = nombre de notes
    return (x+y)/2;
}
console.log(moyenne (6,2))          
----------------------------------------------------------------
//     2ème TEST            PARTIE 8 LES TABLEAUX

var myTableau = ["pomme", "poire", "banane"]; // Données de type chaîne
var myTableau = [123, 456, 789]; // Données de type entier

var myTableau = new Array(); // Tableau vide
var myTableau = Array(); // Tableau vide
var myTableau = new Array(5); // Tableau vide qui contiendra 5 éléments
var myTableau = Array(5); // Tableau vide qui contiendra 5 éléments
var myTableau = new Array("pomme", "poire", "banane"); //Tableau avec données
var myTableau = Array("pomme", "poire", "banane"); // Tableau avec données
------------------------------------------------------------

//     EXERCICE           PARTIE 8 LES TABLEAUX
    //Première proposition
var mytableau = new Array (); 
var x = mytableau.length;
var nb = prompt ("Entrez le nombre d'invités")
for (var i =0; i<nb; i++)
  {
    mytableau[i]= prompt ("nb")
  }
console.log(mytableau)
console.log(mytableau.length)
------------------------
   //   2ème proposition
var mytableau = new Array (); 
var nb = prompt ("Entrez le nombre d'invités")
for (var i =0; i<nb; i++)
  {
    mytableau.push(prompt("Veuillez entrer le nom de l'invité n°"+(i+1)+" :"));
  }
console.log(mytableau)
console.log(mytableau.length)
-------------------------------------------------------------

        // JAVASCRIPT POUR LE WEB
   //      1er TEST     "OBJET DATE"       PARTIE 13 LES OBJETS NATIFS  
var myDate1 = new Date() ;  // Date du jour
var myDate2 = new Date(3600*24*365*40) ;    // Date depuis le 1er janvier 1970
var myDate3 = new Date(2012, 9, 19) ;
var myDate4 = new Date(2012, 9, 19, 10, 33, 12);
var myDate5 = new Date("Jan 1, 2000 00:00:00");
        
console.log('new Date() : ' + myDate1.toLocaleString()); 
console.log('new Date(3600*24*365*40) : ' + myDate2.toLocaleString());
console.log('new Date(2012, 9, 19) : ' + myDate3.toLocaleString());
console.log('new Date(2012, 9, 19, 10, 33, 12) : ' + myDate4.toLocaleString());
console.log('new Date("Jan 1, 2000 00:00:00") : ' + myDate5.toLocaleString());
console.log("");
var annee = 1900 + myDate1.getYear();
var mois  = myDate1.getMonth() + 1;
var jour  = myDate1.getDate();
console.log('date du jour : ' + jour + "/" + mois + "/" + annee);
-------------------------------------------------------------
         // JAVASCRIPT POUR LE WEB       
  //      EXERCICE     "OBJET IMAGE"       PARTIE 13 LES OBJETS NATIFS 
  var i;
  var somme = 0;
  var moyenne;
  var n = -1; 
  var mesNombres = [];

while (n!=0)
{ 
    n = parseInt(prompt("veuillez saisir un nombre. Entrez 0 pour arrêter"));  //parseInt est une méthode qui convertit la chaien en entier

    //n = prompt("veuillez saisir un nombre. Entrez 0 pour arrêter");   SI on veut faire entrer par exemple des prénoms par l'utilisateur au lieu des noombres, on retire parseInt.



    if (n!=0)   // n!= correspond à différent de...Cela pourrait se traduire par >0 ou < à 0 pour cet exercice.
    {
      mesNombres.push(n);
    }
}

for (i=0; i < mesNombres.length ; i++ )
{
    console.log(mesNombres[i]);
    somme = somme + mesNombres[i];
}

console.log("Le nombre de prenoms saisi est : " + mesNombres.length);

console.log("La somme des valeurs est : " + somme);

moyenne = somme / mesNombres.length;

console.log("La moyenne des valeurs est : " + moyenne);
-------------------------------------------------------------

//  EXERCICE         PARTIE 14   INTEGRER DU JAVASCRIPT DANS UNE PAGE WEB
 //      1er TEST     "INTEGRATION DIRECTE"       PARTIE 14   INTEGRER DU JAVASCRIPT DANS UNE PAGE WEB
            //Voir fichier "test js14_integration_codehtml_dans_javascript.html"
 
//  EXERCICE         PARTIE 14   INTEGRER DU JAVASCRIPT DANS UNE PAGE WEB
            // Voir fichier "exercice1 js 14_integrer javascrib dans page web.js"
----------------------------------------------------------------

// Exercice      PARTIE 15       LES EVENEMENTS
    //  PREMIERE PARTIE DE L'EXERCICE: "bouton contrôle"
            // voir fichiers: exercice js15-les evenements.html   et exercice js15-les evenements.js

    //  DEUXIEME PARTIE DE L'EXERCICE: "Nombre Magique"
            // voir fichiers: exercice js15-les evenements_magic nbr intégré.html   et exercice js15-les evenements_magic nbr intégré.js
----------------------------------------------------------------

//  EXERCICE        PARTIE 16   LES EXPRESSIONS REGULIERES
    //  1er TESTcode
var filtre = new RegExp("^[a-z]+$");
var resultat = filtre.test("javascript");
console.log(resultat);
----------------------------------------------------------------

//  EXERCICE        PARTIE 17   LES FORMULAIRES
    //  1er TEST
^0[1-9]{9}$
-------------------
    //  EXERCICE        PARTIE 17   LES FORMULAIRES
        // Voir fichiers: Contact exo js17_lesformulaires
----------------------------------------------------------------*/
