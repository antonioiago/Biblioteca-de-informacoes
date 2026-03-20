<?php
    $nome = Filter_input(type: INPUT_POST, var_name: "nome");
    $idade = Filter_input(type: INPUT_POST, var_name: "idade");
    $valor = Filter_input(type: INPUT_POST, var_name: "valor");
    $sexo = Filter_input(type: INPUT_POST, var_name: "sexo");
    $status;
    $calculo;
    $checksexo;
    if ($idade>=18 && $idade<26)
        {
            $calculo = 1.1;
        } else if($idade>=26 && $idade<35){
            $calculo = 1.05;
            } else {
                $calculo = 1;
            }

            if ($idade>18){
                $status = "Você maior de idade";
            } else {
                $status = "Você é menor de idade";
            }

            
            if ($sexo =='m'){
                $checksexo = 1.1;
                } else {
                    $checksexo = 0.9;
                    }
                            
                    $novovalor;
                    $novovalor = ($valor * $calculo)* $checksexo;
    echo "Seu nome: $nome";
    echo "<br>";
    echo "Sua idade: $idade";
    echo "<br>";
    echo "Você é: $status";
      echo "<br>";
    echo "Valor do seguro $novovalor";
      echo "<br>";
    echo "Sexo: $sexo";
?>