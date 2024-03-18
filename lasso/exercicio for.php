<?php
     echo "Laco de repeticao exercicio for.php <br>";

$paises = array("Brasil", "Argentina", "Uruguai", "Paraguai",
"Peru", "Chile", "Bolivia", "Equador", "Colombia", "Venezuela");

$size = count($pais); //conta quantos paises tem

//imprimir o meu array na tela
for($i = 0; $i < $size; $i++) {
    echo $paises[$i] . "<br>";

}

?>