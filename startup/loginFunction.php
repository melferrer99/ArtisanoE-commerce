<?php 
    session_start();
    $username ="";
    $password = "";
    $errors = array();
    

    //connect to database
    $db = mysqli_connect('localhost','root',"",'db_upload');

        if (isset($_POST['login'])) {
            $u_Fname = ($_POST['u_Fname']);
            $u_Password =  md5($_POST['u_Password']);

        if (count($errors) === 0) {
            $u_Password =($u_Password);
            $query = "SELECT * FROM tbl_users WHERE u_Fname ='$u_Fname' AND u_password ='$u_Password'";
            $result = mysqli_query($db, $query);
            
            if (mysqli_num_rows($result) === 1) {

            echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Login!');
    window.location.href='admin.php';
    </script>"; 
            

            }
            else {
                echo "<script LANGUAGE='JavaScript'>
    window.alert('Invalid Username and Password, Please Try Again!');
    window.location.href='Login.php';
    </script>";
                
            }
        }
        }

 ?>