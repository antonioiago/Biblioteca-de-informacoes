<?php

include "conexao.php";


class Action{
    public function cadastrar(Data $data){
        $bd = new conexao();
        $con = $bd->getConexao();   

        $sql = "insert into pessoa (nome_pessoa) values (?)";
        $stm = $con->prepare ($sql);
        $stm->bindValue(1,$data->getNome());
        $return = $stm->execute();

        if($return) {
            echo "cadastrado com sucesso";
        } else {
            echo "erro ao cadastrar";
        }

    }
}

?>