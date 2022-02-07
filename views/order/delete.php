<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

if(isset($_POST['id']))
{
$existOrder = new OrdersController();
$existOrder->deleteOrder();
}

?>