<?php
$produits = array (
    't-shirt rouge'=> '15.50',
    't-shirt vert'=> '15.50',
    't-shirt argent'=> '16.50',
    'short bleu'=>'19.99',
    'short vert'=>'19.99',
    'veste argent'=>'35');

foreach($produits as $clef => $prix){
    echo $clef.  'a'  .$prix . "</br>";
}




?>