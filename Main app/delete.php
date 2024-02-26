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
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `manager` where manager_id=$id";
        $data->query($sql);
    }
    header('location:manager.php');
    exit;
?>