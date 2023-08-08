<?php 
$conn=mysqli_connect("localhost","root","","cimage");
if(!$conn){
    die("Connection problem").mysqli_connect_error();
}else{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $gender=$_REQUEST['gender'];
    $profession=$_REQUEST['profession'];
    $date=date("y-m-d");

    $query="INSERT INTO login(Name,Email,Password,Gender,Profession,Entry_in) values('$name','$email','$password','$gender','$profession','$date')";
    mysqli_query($conn,$query);
}

header("Location:signup.php");
?>