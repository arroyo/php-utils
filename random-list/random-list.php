<?php
require_once __DIR__.'/classes/RandomCode.php';

$type = 'alphanumeric';
$length = 6;
$numCodes = 10;

$list = RandomCode::getList($type, $length, $numCodes);
RandomCode::printList($list);

// echo "All Random Codes: ";

?>