<?php

require_once 'Autoloader.php';

$service = new ProductBusinessService();
$employees = $service->getLowQuantProducts();

echo '<pre>';
var_dump($employees);
echo '</pre>';