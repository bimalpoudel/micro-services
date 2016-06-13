<?php
/**
 * Example of micro-service
 */
require_once('includes/class.lorem.inc.php');

$lorem = new lorem();
$paragraph = $lorem->paragraph();
echo $paragraph;
