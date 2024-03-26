<?php
  //calculo da media 
  $a1 = 7.8;
  $a2 = 8;
  $a3 = 6.7;
  $a4 = 9;

  //declaração de métado
  function media($a1, $a2, $a3, $a4){
    $media = ($a1 + $a2 + $a3 + $a4) / 4;
    echo "medida final: $media";
  }

  function media2($a1, $a2, $a3, $a4){
    $notas = array($a1,$a2,$a3,$a4);
    $soma = array_sum($notas);
    $media = $soma / sizeof($notas);
    echo "media final: $media";
  }

  //chamada do método
  media2 ($a1, $a2, $a3, $a4);
  ?>
