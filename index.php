<?php
require_once("modele/Modele.php") ;
require_once("modele/Fournisseur.php") ;
require_once("modele/Unite.php") ;
$unite=new Unite();
$unites=$unite->findAll();
require_once("modele/Categorie.php") ;
$categorie=new Categorie();
$categories=$categorie->findAll();
require_once("modele/Produit.php") ;
$produit=new Produit();
$produits=$produit->findAll();



// require_once("views/approvisionnement/addappro.html.php") ;
require_once("views/fournisseur/listeFour.html.php") ;
// require_once("views/produit/listeprod.html.php") ;
// require_once("views/categorie/listecategorie.html.php") ;
// require_once("views/unite/listeunite.html.php") ;  




//  $myserver="http://localhost:8004";



?>
