<?php
function cakes($receita, $ingredientes){
  foreach($receita as $nome => $quantidade){
    if(!isset($ingredientes[$nome])){
      return 0;
    }
  } // retorna 0 se não encontrar algum ingrediente da receita

  $bolos = [];
  foreach($receita as $nome => $qtdMinima){
    $qtdDisponivel = $ingredientes[$nome];
    $bolos[] = floor($qtdDisponivel / $qtdMinima);
  } //Calcula a quantidade de bolos que podem ser feitos
  return min($bolos);   
  //Retorna o número de bolos com base no ingrediente em menor quantidade
}

try {

  $result1 = cakes(
    ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
    ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]
  );
  echo "Teste 1: Podem ser feitos " . $result1 . " bolos\n"; 

  $result2 = cakes(
    ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], 
    ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]
  );
  echo "Teste 2: Podem ser feitos " . $result2 . " bolos\n"; 

    $result3 = cakes(
    ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
    ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]
  );
  echo "Teste 3: Podem ser feitos " . $result3 . " bolos\n"; 

} catch (Exception $e) {
  echo "Ocorreu um erro ao calcular as receitas: " . $e->getMessage() . "\n";
}

//Pete gosta de fazer bolos. 
//Ele tem algumas receitas e ingredientes, 
//mas é péssimo em matemática. Você pode ajudá-lo?

//O primeiro parâmetro é a receita para um (1) bolo
//O segundo parâmetro é a quantidade de ingredientes 
//que ele tem disponível

//Você consegue retornar quantos bolos(inteiros) 
//ele pode fazer?