<?php

class Action{
    public function print(Data $data){
        echo $data->getNome();
    }
}

?>