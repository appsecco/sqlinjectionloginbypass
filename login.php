<?php
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Login Page with SQL Injection</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				Simple Login Page with SQL Injection
			</p>
        </div>
		
		<div class="response">
		<form method="POST" autocomplete="off">
			<p style="color:white">
				Username:  <input type="text" id="uid" name="uid"><br /></br />
				Password: <input type="password" id="password" name="password">
			</p>
			<br />
			<p>
			<input type="submit" value="Submit"/> 
			<input type="reset" value="Reset"/>
			</p>
		</form>
        </div>
    
        
		<br />
		
      <div class="row marketing">
        <div class="col-lg-6">

<?php

if (!empty($_GET['msg'])) {
    echo "<font style=\"color:#FF0000\">Please login to continue.<br\></font\>";
}
//echo md5("pa55w0rd");

if (!empty($_REQUEST['uid'])) {
$username = ($_REQUEST['uid']);
$pass = $_REQUEST['password'];

$q = "SELECT * FROM users where username='".$username."' AND password = '".md5($pass)."'" ;
//echo $q;
	if (!mysqli_query($con,$q))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con,$q);
	$row_cnt = mysqli_num_rows($result);

	if ($row_cnt > 0) {
	
	$row = mysqli_fetch_array($result);
	
	if ($row){
	//$_SESSION["id"] = $row[0];
	$_SESSION["username"] = $row[1];
	$_SESSION["name"] = $row[3];
	//ob_clean();
	
	header('Location:home.php');
	}
}
	else{
		echo "<font style=\"color:#FF0000\"><br \>Invalid password!</font\>";
		
	}
}

//}
?>

	</div>
	</div>
	  
	  
	  <div class="footer">
		<p>Riyaz Walikar | @riyazwalikar</p>
      </div>
	</div> <!-- /container -->
  
</body>
</html>