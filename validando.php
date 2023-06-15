<?php

//si no validamos en el formulario el usuario puede introducir codigo html 
//operador fusion ?? : eje:  isset $_POST['nombre] ? $_POST['nombre] : 'anonimo';
// otra forma  $_POST['nombre] ?? $_POST['nombre];

$errores='';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if(!empty($nombre)){
        $nombre =trim($nombre);
        $nombre =htmlspecialchars($nombre);
        $nombre =stripslashes($nombre);

        $nombre = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);

        echo 'tu nombre es :' . $nombre;
    }else{
        $errores .= 'el nombres es obligatorio';
    }

   
   
}



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form 
    action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>"
     method="post">

        <label for="nombre">Nombre</label>
        <input 
        type="text" 
        placeholder="Tu nombre" 
        id="nombre"
        name="nombre"
        >

        <label for="correo">Correo</label>
        <input 
        type="email" 
        placeholder="Tu correo" 
        id="correo"
        name="correo"
        >

        <?php if(empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
            <?php endif; ?>

        <input 
        type="submit" 
        value="Enviar"
        name="submit"
        >

    </form>

</body>
</html>