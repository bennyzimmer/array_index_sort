// Array q sera ordenado
$arr = [85,7,445,6,22,14,7,56,3,2,56,56,8,99,65,35];

$newArr = [];
$max = $min = $arr[0];

// Pega o valor max e min do array e joga os valores dele como indices
foreach($arr as $index => $value) {
  if($value > $max) {
    $max = $value;
  }

  if($value < $min) {
    $min = $value;
  }

  $newArr[$value][] = [$value];
}

// pode ser utilizadas as funções também
// $min = min($arr);
// $max = max($arr);

$arrOrdered = [];

// itero o array e insiro em um novo array na posicao certa se existir o indice
for($i = $min; $i <= $max; $i++) { // para descrescente
// for($i = $max; $i >= $min; $i--) {
  if(isset($newArr[$i])) {

    // Caso possua mais de um valor igual
    foreach($newArr[$i] as $value) {
      $arrOrdered[] = $i;
    }
  }
}

// Imprimo o array ordenado
print_r($arrOrdered);