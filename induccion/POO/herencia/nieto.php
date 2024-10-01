<?php
include_once 'cliente.php';

class nieto extends cliente{

private $codNieto;

public function __construct($nom, $numDoc, $estatura, $codClient, $codNieto)
{
    parent::__construct($nom, $numDoc, $estatura, $codClient);
    $this->codNieto=$codNieto;
}

public function getCodNieto(){
    return $this->codNieto;
}

public function setCodNieto($codNieto){
    return $this->codNieto=$codNieto;
}



}

?>