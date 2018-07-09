<?php

$paasDATABASE = '';
$conn = new mysqli('localhost','root', $paasDATABASE, 'collector');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ani_species = 'SELECT * FROM animal';
$r = $conn->query($ani_species);
?>
