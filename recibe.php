<?php
//post se crea cuando se manda los datos con submit
//recibimos los datos identificados por name
//validamos que hallan datos de la variable $_post
//creamos las variables con post y su campo name de los inputs
//imprimimos para mirar si estan llegando los datos
// redireccionamos al usuario en caso de que esten bien los datos o lo que queramos hacer




/* print_r($_POST) ; */


 if(isset($_POST) ){


$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$terminos = $_POST['terminos'];
$seleccion = $_POST['seleccion'];

print_r($nombre);
print_r($sexo);
print_r($terminos);
print_r($seleccion);


}else{
    header('http://localhost/formulario/');
}

if($nombre == ''){
    echo 'El nombre es obligatorio';
    }

 



?>