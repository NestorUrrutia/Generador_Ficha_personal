<?php
    ob_start();

    include("p.php");

    $html=ob_get_clean();
    //echo($html);

    // Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
    use Dompdf\Dompdf;
    require_once ('dompdf/autoload.inc.php');
    // Introducimos HTML de prueba
    // Instanciamos un objeto de la clase DOMPDF.
    $pdf = new Dompdf();
    $option= $pdf->getOptions();
    $option->set(array('isRemoteEnabled'=>true));
    $pdf->setOptions($option);

    // Definimos el tamaño y orientación del papel que queremos.
    $pdf->set_paper("A4", "portrait");
    // Cargamos el contenido HTML.
    $pdf->load_html($html,'UTF-8');
    // Renderizamos el documento PDF.
    $pdf->render();
    $contenido = $pdf->output();
    // Enviamos el fichero PDF al navegador.
    $nombreDelDocumento= "pdf/".$apellido." - ".$nombre.rand().".pdf";

    //$nombreDelDocumento = "pdf/".rand()."_hola-mundo.pdf";
    $bytes = file_put_contents($nombreDelDocumento,$contenido);

    include("registro_exitoso.php")

?>
