<?php
include_once 'persona.php';
class empleado extends persona{

    private $codEmple;
    
    public function __construct($nom, $numDoc, $estatura, $codEmple)
    {
        parent::__construct($nom, $numDoc, $estatura);
        $this->codEmple=$codEmple;
    }
    
    public function getCodEmple(){
        return $this->codEmple;
    }
    
    public function setCodEmple($codEmple){
        return $this->codEmple=$codEmple;
    }

    public function mostrar(){
        return(
            "<h2>DATOS DEL EMPLEADO </h2> <br>
            Nombre del Empleado: ".$this->getNom()."<br>
            Codigo del Empleado: ".$this->codEmple."<br>"
        );
    }
} 

?>