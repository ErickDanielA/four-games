<?php

class adivinhe{
    private $numeroUser;
    private $numeroComp;
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
        if ($this->numeroComp == $this->numeroUser){
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

class parimpar{
    private $numeroUser;
    private $numeroComp;
    private $resultado;

    function SetNumUser($number){
        $this->numeroUser = $number;
    }
    function GetNumUser(){
        return $this->numeroUser;
    }
    function SetNumComp(){
        $this->numeroComp = rand(0,10);
    }
    function GetNumComp(){
        return $this->numeroComp;
    }
    function SetParouImpar($parimpar){
        $this-> paridade = $parimpar;
    }
    function GetParouImpar(){
        return $this-> paridade;
    }
    function VerificarVencedor(){
        if($this->paridade == "par"){
            if (($this->numeroComp + $this->numeroUser) % 2 == 0){
                $this->resultado = "Usuário";
            }
            else{
                $this->resultado = "Computador";
            }
        }
        elseif ($this->paridade == "impar"){
            if (($this->numeroComp + $this->numeroUser) % 2 == 0){
                $this->resultado = "Computador";
            }
            else{
                $this->resultado = "Usuário";
            }
        }
    }
    function MostrarResultado(){
        return $this->resultado;
    }    
}

