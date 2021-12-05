<?php include ('loginPROCESS.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">


html,body{
background-image: url('img/bg.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
box-shadow: 5px 5px 5px black;
}


.card-body h2{
color: white;
}


.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

.login_btn{
color: black;
background-color: lightgray;
width: 100px;

}

.login_btn:hover{
color: black;
background-color: white;
}

	</style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">

			<div class="card-header" style="text-align: center;">
				<img src="img/artisano.png" style="width:75% ;height:100px;">
			</div>
			<div class="card-body">
				
					<h2>Log In</h2>
					 <form method="post">
					<div class="input-group form-group">
						<input type="text" class="form-control" placeholder="Username" name="u_Fname" required="" autocomplete="off">
					</div>

					<div class="input-group form-group">
						<input type="password" class="form-control" placeholder="Password" name="u_Password" required="" autocomplete="off">
						 
					</div>
					
					<input type="submit" name="login" id="logos" class="btn btn-success btn-block" value="Log in"> 
						</form>

				
			</div>
			
		</div>
	</div>
</div>
</body>
</html>