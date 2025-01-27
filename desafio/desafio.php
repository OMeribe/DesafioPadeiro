<?php
function cakes($receita, $ingredientes){
  foreach($receita as $ingrediente => $quantidade){
    if(!isset($ingredientes[$ingrediente])){
      return 0;
    }
  } // retorna 0 se não encontrar algum ingrediente da receita

  $bolos = [];
  foreach($receita as $ingrediente => $qtdMinima){
    $qtdDisponivel = $ingredientes[$ingrediente];
    $bolos[] = floor($qtdDisponivel / $qtdMinima);
  } //Calcula a quantidade de bolos que podem ser feitos
  
  return min($bolos);   
  //Retorna o número de bolos com base no ingrediente em menor quantidade
}

// Abaixo estão os casos de uso:
var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
  === 2); 

var_dump(cakes(
  ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], 
  ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]) 
  === 0); 

var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
  === 3); 

//Pete gosta de fazer bolos. 
//Ele tem algumas receitas e ingredientes, 
//mas é péssimo em matemática. Você pode ajudá-lo?

//O primeiro parâmetro é a receita para um (1) bolo
//O segundo parâmetro é a quantidade de ingredientes 
//que ele tem disponível

//Você consegue retornar quantos bolos(inteiros) 
//ele pode fazer?