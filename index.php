
<?php
session_start();
$conn=mysqli_connect("localhost","root","","cimage");
if(!$conn){
    die("connection failed").mysqli_connect_error();
}else{
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM login WHERE Email='$email' and Password='$password'";
    $rs=mysqli_query($conn,$query);
    $row=mysqli_num_rows($rs);
    if($row==1){
        $_SESSION['Email']='ujjawalk.kumar@gmail.com';
        $_SESSION['Id']='13381';
        echo "Username and password matched";
        header("Location:homepage.php");

    }else{
        //echo "Failed to login";
        echo "<script>document.addEventListener('DOMContentLoaded', function(event) {
            swal('Please enter correct username/password !');
          });
        </script>";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
    
        body{
            background-color: cadetblue;
        }

        table{
            border: 2px solid blueviolet;
            height: 200px;
            width: 300px;
        
        }
    </style>
</head>
<body>


    <center>
        <form method="post">
            <table>
            <th><u><b>Login Window</b></u></th>
            <tr>
                <td>Email</td>
            </tr>
            <tr>
                <td><input type="email" name="email" size="25"></td>
            </tr>
            <tr>
                <td>Password</td>
            </tr>
            <tr>
                <td><input type="password" name="password" size="25"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login"></td>
            </tr>
            <tr>
                <td><a href="signup.php">Don't have an account? signup here</a></td>
            </tr>
            <tr>
                <td><a href="contactus.php">contact us</a></td>
            </tr>
            </table>
        </form>

    </center>
</body>
</html>