<?php



mt_srand(time());
$digitos = '';
for($i = 0; $i < 9; $i++){
  $digitos .= mt_rand(0,9);
}
echo $digitos;


mt_srand(time());
$digitos = '';
for($i = 0; $i < 16; $i++){
  $digitos .= mt_rand(0,9);
}
echo $digitos;

?>