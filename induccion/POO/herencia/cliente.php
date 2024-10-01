<?php
include_once 'persona.php';

class cliente extends persona{

private $codClient;

public function __construct($nom, $numDoc, $estatura, $codClient)
{
    parent::__construct($nom, $numDoc, $estatura);
    $this->codClient=$codClient;
}

public function getCodClient(){
    return $this->codClient;
}

public function setCodClient($codClient){
    return $this->codClient=$codClient;
}



}
?>