
<?php
session_start();
 
$con = mysqli_connect('localhost', 'root');

$db = mysqli_select_db($con, 'db_upload');

if(isset($_POST['login'])){
    $u_Fname = mysqli_escape_string($con,$_POST['u_Fname']);
    $u_Password = mysqli_escape_string($con,$_POST['u_Password']); 
    
    
    $sql = " SELECT * from tbl_users where u_Fname = '$u_Fname'";
    $query = mysqli_query($con,$sql);
    $admin = mysqli_fetch_array($query);

    $hashedPASS = password_verify($u_Password, $admin['u_Password']);

    if ($hashedPASS) {
        $_SESSION['u_Fname'] = $admin['u_Fname'];
         $_SESSION['u_type'] = $admin['u_type'];  

         if ($_SESSION['u_type'] == 'Admin') {
                header('location:adminphotoRE.php');
           }

           if ($_SESSION['u_type'] == 'SuperAdmin') {
                header('location:SuperAdmin.php');
           } 
           else{
            echo '<script>alert("Incorect CRIDENTIALS!"); location.href="login.php";</script>';
           }
           
    }
    else{
            echo '<script>alert("Incorect CRIDENTIALS!"); location.href="login.php";</script>';
           }

    $_SESSION['u_id'] = $admin['u_id'];
    $_SESSION['u_Fname'] = $admin['u_Fname'];
    $_SESSION['u_Lname'] = $admin['u_Lname'];
    $_SESSION['u_Email'] = $admin['u_Email'];
    $_SESSION['u_Cnumber'] = $admin['u_Cnumber'];
    $_SESSION['u_type'] = $admin['u_type'];    
}
?>