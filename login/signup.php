<?php 
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<style>
		body{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('pexels-hasan-albari-1229861(1).jpg');;
			background-size: cover;
	</style>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
		border-radius: 25px;
	}

	#box{

		background-color: rgb(255, 99, 71, 0.8);
		margin: auto;
		width: 300px;
		padding: 20px;
		border-radius: 25px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>