<?php
include_once 'cliente.php';
include_once 'empleado.php';
include_once 'nieto.php';

$datCliente=new cliente("Albert", 123, 1.9, 456);
echo $datCliente->mostrar().'<br>'."El codigo del cliente es: ".$datCliente->getCodClient();

$datNieto=new nieto("Andrea", 124, 1.8, 455, 789);
echo $datNieto->mostrar().'<br>'."El codigo del nieto es: ".$datNieto->getCodNieto();

$datEmpleado=new empleado("Juan", 741, 1.7, 852);
echo $datEmpleado->mostrar();

?>