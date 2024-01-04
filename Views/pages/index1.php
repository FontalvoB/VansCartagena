<?php include '../includes/header.php'; ?>
<?php
/**
 * Author:
 * Ing Joiner Escorcia, Juan Gomez y Bayron Fontalvo
 *
 **/
require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
if (!session_id()) @session_start();
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
date_default_timezone_set('America/Bogota');
?>



<?php include '../includes/footer.php'; ?>