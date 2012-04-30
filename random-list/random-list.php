<?php
require_once __DIR__.'/classes/RandomCode.php';

// Change these values to suit your needs
$type = 'alphanumeric';
$length = 6;
$numCodes = 200;

// Shouldn't need to change anything below or in RandomCode.php

$list = RandomCode::getList($type, $length, $numCodes);
RandomCode::printList($list);

// echo "All Random Codes: ";

?>