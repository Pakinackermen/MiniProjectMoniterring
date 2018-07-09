<?php
include 'connect.php';

$con2 = new mysqli('localhost','root', '', 'collector');

// Check connection
if ($con2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$s = "SELECT MAX(id) as id FROM person";
$r2 = $con2->query($s);
if ($r2->num_rows > 0) {
    // output data of each row
    while($row1 = $r2->fetch_assoc()) {

        if($row1['id'] < 1000){$row1['id']+= 1000;}
        $code_id = $row1["id"] + 1;

    }
}

 ?>
