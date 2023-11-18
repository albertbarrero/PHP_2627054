<?php

class persona{
    private $nom;
    private $numDoc;
    private $estatura;

    public function __construct($nom, $numDoc, $estatura){
        $this->nom=$nom;
        $this->numDoc=$numDoc;
        $this->estatura=$estatura;
    }

    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        return $this->nom=$nom;
    }

    function getnumDoc(){
        return $this->numDoc;
    }

    function setnumDoc($numDoc){
        return $this->numDoc=$numDoc;
    }

    function getEstatura(){
        return $this->estatura;
    }

    function setEstatura($estatura){
        return $this->estatura=$estatura;
    }

    public function mostrar(){
        return(
        "<h2>DATOS PERSONALES</h2>"."<br>".
        "El nombre es: ".$nombre= $this->nom."<br>".
        "El numero de documento es: ". $numDoc=$this->numDoc."<br>".
        "La estatura es: ".$estatura=$this->estatura);
    }
}

?>