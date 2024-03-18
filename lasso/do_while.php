<?php
     $i = 1;
     $qtde = 22;

     do{
         echo "<br>" . $i;
             //condicional

             $res = ($i < 18) ? "Menor de idade" : "Maior de Idade"

             echo $res;

             $i++

             if($i < 18){
                echo " = Menor de Idade";
             }else{
                echo " = Maior de Idade";
             
             }

         $i++;
     }
     while($i < 22);