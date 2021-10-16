<?php

session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con); 
  
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>My website</title>
<style type= "text/css" >
     body{
     background-image: url("again.jpg");
     background-size: cover;
     background-attcachment:fixed;
} 
    link-area{
      width: 70%;
      margin:auto;
      padding: 30px 0;
      display:inline-flex;
      align-items:center;
      justify-content:space-between;    
}
    a:link, a:visited{
    background-color: orange;
    color:black;
    padding: 10px 20px;
    text-align:center;
    text-decoration: none;
    display:inline-block;
    font-family: cursive;
    border-radius:10px;
    
} 
    a:hover, a:active{
    background-color: rgba(180, 180, 180);
    color:blue;
    background-color:transparent;
    text-decoration:underline;
} 
   .content{
   text-align: center;
   font-style: cursive;
   font-size: 100px;
   color: floralwhite;
}
  .Hello{
    color: cadetblue;
    font-family: cursive;
}

</style>

<body>

 
  <div class="link-area" >
  <a href="logout.php">Logout</a>
  <a href="#">Home</a>
  <a href="#">link</a>
  <a href="#">gallery</a>
  <a href="#">Contact</a>
</div>
  
  <div class="content">
<h1>WELCOME!</h1>
  </div>

  
  <div class= "Hello"> Hello, <?php echo $user_data['user_name'];?> </div>
</body>
</html>