<?php 

$host="localhost";
$user="root";
$password="123456";
$db ="worldcup";

session_start();

$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where user='".$username."' AND password ='".$password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]== "user"){
        $_SESSION["username"]=$username;
       header("location:userhome.php");
    }

    else if($row["usertype"]== "admin"){
        $_SESSION["username"]=$username;
        echo header("location:adminpage.php");
    }
    else {
        echo "username or password incorrect";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Login Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link rel="icon" href="image/fifa-qatar-2022-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
</head>
<body>

<div class="wrapper">
   <div class="logreg-box">
     <div class="form-box login"> 
    <form action="" method="POST">
        <h1>Login</h1>
        <p>Please login to use the platform</p>
        <div class="input-box">
            <input type="text" name="username" placeholder=" Username" required/>
            <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder=" Password" required/>
       <i class="bx bxs-lock-alt"></i>
        </div>
        
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
            <p>Don't have an account?<a href="#">
                Register
            </a></p>
        </div>
    </form>
</div>

<div class="form-box register">
<form action="" method="POST">
    <h1>Registration</h1>
    <p>Provide the following to verify your identity</p>
    <div class="input-box">
        <input type="text" name="username" placeholder=" Username" required/>
        <i class="bx bxs-user"></i>
    </div>
    <div class="input-box">
        <input type="password" name="password" placeholder=" Password" required/>
   <i class="bx bxs-lock-alt"></i>
    </div>
    
    <button type="submit" class="btn">Register</button>
    <div class="login-link">
        <p>Already have an account?<a href="#">
            Login
        </a></p>
    </div>
</form>
</div>
</div>
</div>

<script src="script.js"></script>
</body>
</html>