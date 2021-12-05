<?php

$conn = mysqli_connect("localhost","root","","db_upload");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['approve'])){
	$id = $_POST['r_id'];

$sql = "UPDATE tbl_reservation SET r_status = 'Booked' WHERE r_id = '$id'";
$querysult = mysqli_query($conn, $sql);

if ($querysult) {
    echo "<script type='text/javascript'>alert('Successfuly Updated!'); location.href='messages.php';</script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>