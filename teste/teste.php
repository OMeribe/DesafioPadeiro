<?php
function cakes($receita, $ingredientes){
    $bolos = [];
    foreach($receita as $ingrediente => $qtdMinima){
        $qtdDisponivel = $ingredientes[$ingrediente];
        $bolos[] = floor($qtdDisponivel / $qtdMinima);
  } //Calcula a quantidade de bolos que podem ser feitos
  return min($bolos);   
}

$var1 = cakes(
    ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
    ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]); 
  
$var2 = cakes(
    ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], 
    ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]); 
  
$var3 = cakes(
    ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
    ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) ;

print("$var1, $var2, $var3");