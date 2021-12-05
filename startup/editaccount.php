<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_upload";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
	isset determines kung ang $_POST['$varname']
	ay mayroong pinanggagalingan, make sure na ang bawat loob ng isset
	ay nakadeclare na variable kung saan manggagaling ang mga data na gusto 
	mong iinput sa database...
*/
if(isset($_POST['updateACC'])){
// declare variables where the contain should be connected where the isset came from...
		
	
		$u_Fname = mysqli_real_escape_string($conn,$_POST['u_Fname']);
		$u_Password = password_hash($_POST['u_Password'], PASSWORD_DEFAULT);


		$sql = "UPDATE tbl_users SET u_Fname ='$u_Fname',u_Password = '$u_Password' WHERE u_id =".$_SESSION['u_id'];
		// this is where the process happends...
			$querysult = mysqli_query($conn, $sql);

/*if the processed has been successfuly executed, then we will going to use IF statement to
determine whether the CRUD or any SQL commands successfully executed.
*/
if ($querysult) 
	{
	    $message = 'Successfully Updated!';
	    echo "<script>
	    		alert('Profile Updated. Login AGAIN!');
				window.location.href='login.php';
			</script>";
	} 
else 
	{
    	echo "Error updating record: " . mysqli_error($conn);
	}
}
// clos eyour connection, as always xx
mysqli_close($conn);
?>