<?php
//recibimos la informacion por url O PANTALLA
//el usuario puede ver los datos
//con get nos pueden inyectar codigo, no utilizar con informacion sensible
 

if($_POST){

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$terminos = $_POST['terminos'];
$seleccion = $_POST['seleccion'];

print_r($nombre);
print_r($sexo);
print_r($terminos);
print_r($seleccion);

}

if($nombre == ''){
echo 'El nombre es obligatorio';
} 

