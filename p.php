<?php
    session_start();
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $email=$_POST['email'];
    $genero=$_POST['genero'];
    $profesion=$_POST['profesion'];
    $lugar_nacimiento=$_POST['lugar_nac'];
    $fecha_nac = $_POST['nacimiento'];
    $año_nac= ($fecha_nac[0]*1000)+($fecha_nac[1]*100)+($fecha_nac[2]*10)+$fecha_nac[3];
    $direccion = $_POST['direccion'];
    $casaodto= $_POST['casa-dto'];
    $departamento = $_POST['departamento'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $pais = $_POST['pais'];
    $tel_contacto = $_POST['tel_contacto'];
    $tel_emergencia = $_POST['emer'];
    $dojo = $_POST['dojo'];
    $graduacion_actual=$_POST['graduacion'];
    $horario_practica=$_POST['horario_practica'];
    if($dojo=="vm"){
        $nombre_dojo="Dojo Shotokan Club Villa Mitre";
        $direccion_dojo= "Garibaldi 149";
    }else{
        $nombre_dojo="Dojo Shotokan Club Uno Bahía Club";
        $direccion_dojo= "Lavalle 605";}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            font-family: 'Arial';
            font-size: 1em;
        }

        .container{
            display: grid;
            grid-column: 50% 50%;
        }
    </style>
  </head>

<body>
<div class="container">


        <div class="row text-center">
            <h1>Karate Shotokan - Bahia Blanca</h1>
        </div>

        <h3>Ficha Personal: <?php echo($nombre." ".$apellido) ?></h3>
        <p><b>Fecha de Registro: </b> <?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo ($DateAndTime = date('d-m-Y  h:i:s a', time())); ?><br>
        <b>Edad: </b> <?php echo(2022 - $año_nac)?></p>
        <img src="<?php echo('https://karateshotokan2023.000webhostapp.com/images-users/'.$_SESSION['imagen'])?>" width="150px" />


        <div class="datos_personales">
            <h3>Datos Personales</h3>
            <hr>
            <div class="contenedor">
                <b>Nombre(s):</b> <?php echo($nombre) ?><br>
            </div>

            <div class="contenedor">
                <b>Apellido(s):</b> <?php echo($apellido) ?><br>
            </div>
            
            <div class="contenedor">
                <b>DNI:</b> <?php echo($dni) ?><br>
            </div>

            <div class="contenedor">
                <b>Sexo:</b> <?php echo($genero) ?><br>
            </div>

            <div class="contenedor">
                <b>Email:</b> <?php echo($email) ?><br>
            </div>

            <div class="contenedor">
                <b>Fecha de Nacimiento:</b> <?php echo($fecha_nac) ?><br>
            </div>

            <div class="contenedor">
                <b>Lugar Nacimiento:</b> <?php echo($lugar_nacimiento) ?><br>
            </div>

            <div class="contenedor">
                <b>Profesión:</b> <?php echo($profesion) ?><br>
            </div>

            <div class="contenedor">
                <b>Domicilio:</b> <?php echo($direccion) ?><br>
            </div>

            <div class="contenedor">
                <b>Tipo:</b> <?php echo($casaodto) ?><br>
            </div>

            <div class="contenedor">
                <?php
                    if($casaodto=="dto")
                        echo("<b>Departamento:</b>".$departamento."<br>");
                ?>
            </div>

            <div class="contenedor">
                <b>Localidad:</b> <?php echo($localidad) ?><br>
            </div>

            <div class="contenedor">
                <b>Provincia:</b> <?php echo($provincia) ?><br>
            </div>

            <div class="contenedor">
                <b>País:</b> <?php echo($pais) ?><br>
            </div>

            <div class="contenedor">
                <b>Tel Contacto:</b> <?php echo($tel_contacto) ?><br>
            </div>

            <div class="contenedor">
                <b>Tel Emergencia:</b> <?php echo($tel_emergencia) ?><br>
            </div>
        </div>

        <div class="datos_dojo">

            <h3>Dojo</h3>
            <hr>
            <div>
                <b>Dojo:</b> <?php echo($nombre_dojo) ?><br>
            </div>
            <div>
                <b>Dirección:</b> <?php echo($direccion_dojo) ?><br>
            </div>
            <div>
                <b>Graduacion Actual:</b> <?php echo($graduacion_actual) ?><br>
            </div>
            <div>
            <?php
                    if($dojo=="vm")
                        echo("<b>Horario de Practica:</b>".$horario_practica."<br>");
                ?>

            </div>

    </div>
</body>
</html>




