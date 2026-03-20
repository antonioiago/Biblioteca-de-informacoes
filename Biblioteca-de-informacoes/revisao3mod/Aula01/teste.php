<?php
    $nome = filter_input(INPUT_POST, "nome"); 
    $idade = filter_input(INPUT_POST, "idade"); 
    $valor = filter_input(INPUT_POST, "valor"); 
    $sexo = filter_input(INPUT_POST, "sexo"); 
    $checksexo;
    if($sexo=='m'){
        $checksexo= 1.1;
    }else{
        $checksexo= 0.9;
    }

    $basecalculo;
    if($idade>=18 && $idade<26){
        $basecalculo = 1.1;
    }else if($idade>=26 && $idade<35){
        $basecalculo = 1.05;
    }else{
        $basecalculo = 1;
    }

    $novovalor = ($valor * $basecalculo)*$checksexo;
    echo "$nome o valor final do seu seguro é $novovalor";
?>
