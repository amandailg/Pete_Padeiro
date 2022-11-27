<?php


function cakes($recipe, $ingredients){
  $cont  = 0;
  //contagem das ocorrências do array de ingredientes no array da receita
  foreach ($recipe as $key => $value) {
    foreach($ingredients as $key2 => $value2){     
      if($key == $key2){
        $cont++;
      }
    } 
  }
  
  //array para guardar o resultado da divisão dos ingredientes pela receita
  $resultDiv = array();
  
  //verifica se as ocorrências correspondem ao numero de chaves da receita
  if($cont - count($recipe) >= 0) {
    foreach ($recipe as $key => $value) {
      foreach($ingredients as $key2 => $value2){ 
        if($key == $key2){
          //incrementa no array o resultado da divisão
  		  array_push($resultDiv, intdiv($value2, $value));
        }
      }
    }
    //retorna o menor numero do array, que corresponde ao numero de bolos possiveis
    return min($resultDiv);
  } else {
  //retorna 0, pois não tem todos os ingredientes necessários para a receita
    return 0;
  }
  
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

//o resultado final é 'bool(true) bool(true) bool(true)', pois todos os resultados corresponderam ao numero de bolos dos casos de uso

?>