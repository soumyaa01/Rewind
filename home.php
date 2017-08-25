<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"stories");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   //$sql= "select active from users where username='$user_check'";
   echo $user_check;
   if(!isset($_SESSION['login_user'])){
      header("location:index.html");
   }

?>
<html>
<head>
	    <!-- CSS  -->
        <link rel="stylesheet" type="text/css" href="css/home.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!--JS-->
         <script src='js/jquery-2.1.1.js'></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script type="js/script.js"></script>
        <title>Rewind</title>
        <meta name="viewport" content="width=device-width" />

         <!--External resources-->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
 	 <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="jumbotron" style="background-color: #009688">
</div>
</div>
<div class="container" id="home">
<div id="contacts">
	<div class="head container-fluid" style="margin-left: -3%">
         <a href="logout.php">Log out</a>       
        </div>
</div>

</div>
</body>
</html>