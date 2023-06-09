<?php

class adivinhe{
    private $numeroUser;
    private $numeroComp = rand(1, 100);
    private $resultado;

    function SetNumUser($number){
        $this->numeroUser = $number;
    }
    function GetNumUser(){
        return $this->numeroUser;
    }
    function SetNumComp(){
        $this->numeroComp = rand(1,100);
    }
    function GetNumComp(){
        return $this->numeroComp;
    }
    function VerificarVencedor(){
        if ($this->numeroComp = $this->numeroUser){
            $this->resultado = "Usuário";
        }
        else{
            $this->resultado = "Computador";
        }
    }
    function MostrarResultado(){
        return $this->resultado;
    }    
}


