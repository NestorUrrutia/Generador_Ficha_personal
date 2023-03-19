<?php
    error_reporting(0);
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="js/miscript.js"></script>

    <link rel="stylesheet" href="css/style-link-registro.css">
</head>
<body>

    <div class="principal">
        <div class="encabezado">
            <img class="logo-shotokan" src="img/logo-shotokan (2).png" width="80%"alt="">
        </div>

        <div class="">
            <h1>Ficha de Registro</h1>
            <hr>
        </div>

        <div class="">
            <h3>Datos Personales</h3>
            <p>La información que se ingrese debe del practicante.</p>
        </div>

        <div class="contenido_form">


            <form action="genera.php" method="POST">

                <div>

                    <div class="todas_columnas">
                        <b><label for="nombre">Nombre(s): </label></b>
                        <input type="text" required name="nombre" id="nombre">
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Apellido(s): </label></b>
                        <input type="text" required name="apellido" id="apellido">
                    </div>
                    
                    <div class="todas_columnas">
                        <b><label for="">DNI: </label></b>
                        <input type="number" required placeholder="Dni sin puntos" name="dni" id="dni">
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Sexo: </label></b>
                        <select name="genero" required id="genero">
                            <option value="femenino">Femenino</option>
                            <option value="masculino">Masculino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Email: </label></b>
                        <input type="email" required name="email" id="email">
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Profesión: </label></b>
                        <input type="text" required name="profesion" id="profesion" placeholder="comerciante/ estudiante / etc">
                    </div>

                    <div class="parcial_columnas">
                        <b><label for="">Fecha de Nac: </label></b>
                        <input type="date" required name="nacimiento" id="nacimiento">
                    </div>

                    <div class="parcial_columnas">
                        <b><label for="">Lugar de Nac.: </label></b>
                        <input required type="text" name="lugar_nac" id="lugar_nac">
                    </div>

                    <div class="parcial_columnas">
                        <b><label for="">Dirección: </label></b>
                        <input required type="text" name="direccion" id="direccion">
                    </div>

                    <div class="radios">
                        <div>
                            <b><label class="label_radio" for="casa">casa: </label></b>
                            <input onchange="cambiar_csa()"class="input_radio" type="radio"  value="casa" id="casa" name="casa-dto" id="casa" value="casa">
                        </div>

                        <div>
                            <b><label class="label_radio" for="departamento">departamento</label></b>
                            <input onchange="cambiar_dto()" class="input_radio" type="radio" id="departamento" value="dto" name="casa-dto">
                        </div>
                    </div>

                    <div id="div_dto" class="parcial_columnas">
                        <b><label for="">Dto: </label></b>
                        <input type="text" name="departamento" id="departamento">
                    </div>

                    <div class="parcial_columnas">
                        <b><label for="">Localidad: </label></b>
                        <input required type="text" name="localidad" id="localidad">
                    </div>

                    <div class= "parcial_columnas">
                        <b><label for="">Provincia: </label></b>
                        <input type="text" required name="provincia" id="provincia">
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Pais: </label></b>
                        <input type="text" required name="pais" id="pais">
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Tel Contacto: </label></b>
                        <input type="text" required name="tel_contacto" id="tel_contacto" placeholder="con 0/con 15">

                    </div>

                    <div class="todas_columnas">
                        <label for=""><b>Contactos de Emergencia: </b></label>
                        <textarea name="emer" required id="emer" cols="31" rows="4" placeholder="N° celular + nombre y apellido - parestesco (papa/mama/etc.)"></textarea>
                    </div>


                    <div class="todas_columnas">
                        <h3>Dojo</h3>
                        <hr>
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Dojo de practica: </label></b>
                        <select onchange="cambiar()" required name="dojo" id="dojo">
                            <option value=""></option>
                            <option value="vm">Dojo Shotokan - Villa Mitre</option>
                            <option value="uno">Dojo Shotokan - Uno Bahia club - Lavallle </option>
                        </select>
                    </div>

                    <div class="todas_columnas">
                        <b><label for="">Grad. Actual</label></b>
                        <select required name="graduacion" id="graduacion">
                            <option value=""></option>
                            <option value="10° Kyu">Blanco</option>
                            <option value="9° Kyu°">Amarillo</option>
                            <option value="8° Kyu">Naranja</option>
                            <option value="7° Kyu">Verde</option>
                            <option value="6° Kyu">Celeste</option>
                            <option value="5° Kyu">Violeta</option>
                            <option value="4° Kyu">Azul</option>
                            <option value="3° Kyu">Marron</option>
                            <option value="2° Kyu">Marron</option>
                            <option value="1° Kyu">Marron</option>
                            <option value="1er dan">Negro</option>
                        </select>
                    </div>

                    <div id="horario_VM" class="todas_columnas">
                        <b><label for="">Horario de Práctica</label></b>
                        <select name="horario_practica" id="horario_practica">
                            <option value=""></option>
                            <option value="Primer Horario">18hs - 19hs (Niños/Adultos - Intermedios/Avanzados)</option>
                            <option value="Segundo Horario">19hs - 20hs (Niños - Principiantes/Intermedios)</option>
                            <option value="Tercer Horario">20hs - 21hs (Adultos - Todos los niveles)</option>
                        </select>
                    </div>

                    <div class="enviar">
                        <input type="submit" name="submit" value="Enviar">
                    </div>
                </div>
            </form>

            <div>
                <?php include "funcionesPHP/cargarimagen.php";
                ?>
                <form action="index.php" method="POST" enctype="multipart/form-data"/>
                    <p>Selecciona la imagen y luego presione subir imagen</p>
                    <p>Añadir imagen: <input name="archivo" id="archivo" type="file"/></p>
                    
                    <input type="submit" onclick = "this.form.action" name="subir" value="Subir imagen"/>
                </form>
            </div>


        </div>




    </div>



    <script src="js/miscript.js"></script>
</body>
</html>


