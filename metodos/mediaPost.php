<?php
  //calculo da media 

  $nota1 = $_POST["a1"];
  $nota2 = $_POST["a2"];
  $nota3 = $_POST["a3"];
  $nota4 = $_POST["a4"];

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