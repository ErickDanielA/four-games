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

class jokenpo{
    private $pptUser;
    private $pptComp;
    private $resultado;

    function SetPPTUser($ppt){
        $this->PPTUser = $ppt;
    }
    function GetPPTUser(){
        return $this->PPTUser;
    }
    function SetPPTComp(){
        $pptCompArray = array("pedra", "papel", "tesoura");
        $this->PPTComp = array_rand($pptCompArray, 1);
    }
    function GetPPTComp(){
        return $this->PPTComp;
    }
    function VerificarVencedor(){
        if ($this->PPTUser == "pedra"){
            if($this->PPTComp == "pedra"){
                $this->resultado = "Empate";
            }
            elseif($this->PPTComp == "papel"){
                $this->resultado = "Computador";
            }
            elseif($this->PPTComp == "tesoura"){
                $this->resultado = "Usuário";
            }
        }
        elseif ($this->PPTUser == "papel"){
            if($this->PPTComp == "pedra"){
                $this->resultado = "Usuário";
            }
            elseif($this->PPTComp == "papel"){
                $this->resultado = "Empate";
            }
            elseif($this->PPTComp == "tesoura"){
                $this->resultado = "Computador";
            }
        }
        elseif ($this->PPTUser == "tesoura"){
            if($this->PPTComp == "pedra"){
                $this->resultado = "Computador";
            }
            elseif($this->PPTComp == "papel"){
                $this->resultado = "Usuário";
            }
            elseif($this->PPTComp == "tesoura"){
                $this->resultado = "Empate";
            }
        }
    }
    function MostrarResultado(){
        return $this->resultado;
    }    
}