<?php


require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
if (!session_id()) @session_start();
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
date_default_timezone_set('America/Bogota');


$Nombre = $_POST['nombre'];
$Correo = $_POST['correo'];
$Comentario = $_POST['comentario'];
$Telfono = $_POST['telefono'];

$Fecha  =  date("Y-m-d");

if ($HomeController->AgregarComentario($Nombre, $Correo, $Comentario, $Fecha) == true) {

    //$msg->success('!Agregado con exito¡');

    header("location: ../../Views/pages/index.php");
    //echo("<script language='javascript'>location.href='../../Views/pages/declaracion.php?IdServicio='+$IdServicio</script>");
} else {
    $msg->error('¡ERROR, no se Agrego!..');

    header("location: ../../Views/pages/index.php");
    //echo("<script language='javascript'>location.href='../../Views/pages/declaracion.php?IdServicio='+$IdServicio</script>");
}
