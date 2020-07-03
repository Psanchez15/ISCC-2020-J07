<?php
$panier = [
    ['T-shirt rouge', 15.5,5 ],
    ['T-shirt vert',15.5,6],
    ['T-shirt argent', 15.50,8],
    ['Short bleu',16.5,5],
   ['Short vert',19.9,5],
    ['Veste argent',19.99,10],
    ['Veste argent',35,3]
];

function afficher_panier ($panier){
    foreach ($panier as $p){
        echo $p[0];
        echo " ";
        echo $p [1];
        echo " ";
        echo $p [2];
       echo "<br>";
    }
}
afficher_panier ($panier)
?>