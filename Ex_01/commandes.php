<?php
$historique_commandes = array ("5.49","9.99","5.49","15.99","25");
function afficher_commandes ($historique_commandes) {
    foreach ($historique_commandes as $value){
        echo "Une commande de $value euros a été reçu" . "</br>";
    }
}
afficher_commandes ($historique_commandes);
function afficher_total ($historique_commandes){
    echo "sum $historique_commandes="."Le total des commandes est de $value euros";
}
?>