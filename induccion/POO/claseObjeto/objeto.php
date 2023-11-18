<?php
require_once 'clase.php';

$objeto=new clase('Jose', 20);
echo 'El nombre de la persona es: '.$objeto->getNom().'<br>';

$objeto1=new clase('Cindy', 22);
echo 'La edad de la persona es: '.$objeto1->getEdad().'<br>';

$objeto2=new clase('Yaneth', 23);
echo $objeto2->mostrar();


?>