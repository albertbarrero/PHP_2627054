<?php
function campos($espacios){
//if (isset($_POST['espacio'])) {
  //  $espacio = $_POST['espacio'];
    echo '<form action="" method="post">';
    for ($i=0; $i < $espacios; $i++) { 
        echo'<label for="dato'.$i.'">Dato'. $i .'</label>';
        echo '<input type="text" name="dato[]" id="">'."<br>";             
    }
    echo '<input type="submit" value="Datos">';
    echo '</form>';
//}
}

function mostrar(){
if (isset($_POST['dato'])) {
    $dato = $_POST['dato'];
    echo '<ul>';
    foreach ($dato as $key => $dato) {
        echo '<li>Dato'.($key+1).': '. $dato .'</li><br>';
    }
    echo"</ul>";
}
}

?>