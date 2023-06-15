
<?php

$nombre = $_POST['nombre'];

if($_POST['nombre']){
echo $nombre;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- para los formularios en php, se indica el 
    action= es donde queremos enviar la informacion
    method = como lo enviamos por post o get
    y
    a los inputs
    le colocamos
    name= que es como identificamos la informacion donde el usuario escribio los datos
    type= que tipo de datos es
    ojo
    value = es la informacion que tomamos, pero para algunos inputs no se le coloca el value, solo a los
    submit, checkbox, radio etc.
    el for en los label es para relacionarlo con los inputs id.
    esto dentro del action podemos utilizarla <?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?> es una
    variable superglobal
     contiene el nombre del archivo del script actual que se esta ejecutando, para 
     que los datos del formulario no contengan 
     código HTML o scripts maliciosos que puedan afectar la seguridad de la aplicación.
-->



    <form 
    action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?> " 
    method="post" 
    class="formulario_login">

        <div class="formulario_contenedor">
            <input 
            type="text"
            placeholder="nombre"
            name="nombre"
            class="form_input"
            >
            
            <label for="hombre">Hombre</label>
            <input 
            type="radio"
            value="hombre"
            id="hombre"
            name="sexo"
            >

            <label for="mujer">Mujer</label>
            <input 
            type="radio"
            value="mujer"
            id="mujer"
            name="sexo"
            >
            <br>

            <select name="seleccion" id="" >
                <option value="">--seleccione--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br>

            <label for="terminos">Acepta los terminos</label>
            <input 
            name="terminos"
            type="checkbox"
            id="terminos">


            <input 
            type="submit"
            value="Enviar"
            class="form_submit"
            
        >
        </div>
        
    </form>
    
</body>
</html>