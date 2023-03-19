<?php
    //Si se quiere subir una imagen
    if (isset($_POST['subir'])) {
        //Recogemos el archivo enviado por el formulario
        $archivo = $_FILES['archivo']['name'];
        //Si el archivo contiene algo y es diferente de vacio
        if (isset($archivo) && $archivo != "") {
            //Obtenemos algunos datos necesarios sobre el archivo
            $tipo = $_FILES['archivo']['type'];
            $tamano = $_FILES['archivo']['size'];
            $temp = $_FILES['archivo']['tmp_name'];
            //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 1000000))) {
                echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
            }
            else {

                //Si la imagen es correcta en tamaño y tipo
                //Se intenta subir al servidor
                if (move_uploaded_file($temp, 'images-users/'.$archivo)) {
                    //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                    chmod('images-users/'.$archivo, 0777);
                    //Mostramos el mensaje de que se ha subido co éxito
                    //Mostramos la imagen subida
                    session_start();
                    $_SESSION['imagen']=$archivo;
                    echo '<p><img name="img" id="img" src="images-users/'.$archivo.'" width="150px"></p>';
                }
                else {
                    //Si no se ha podido subir la imagen, mostramos un mensaje de error
                    echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>'.$tipo;
                }
            }
        }
    }
?>
