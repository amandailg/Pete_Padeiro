# Pete_Padeiro

Pete gosta de fazer bolos. Ele tem algumas receitas e ingredientes, mas é péssimo em matemática. Você pode ajudá-lo?<br>
O primeiro parâmetro é a receita para um (1) bolo<br>
O segundo parâmetro é a quantidade de ingredientes que ele tem disponível<br>
Você consegue retornar quantos bolos(inteiros) ele pode fazer?<br>
<br>
<?php<br>
function cakes($recipe, $ingredients){<br>
    // Desenvolver o código nesta function<br>
}<br>
<br>
// Abaixo estão os casos de uso:<br>
var_dump(cakes(<br>
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], <br>
  ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) <br>
  === 2); <br>
<br>
var_dump(cakes(<br>
  ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]) <br>
  === 0); <br>
<br>
var_dump(cakes(<br>
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], <br>
  ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) <br>
  === 3); <br>
<br>
<br>
<br>
Resolva este problema utilizando PHP<br>
