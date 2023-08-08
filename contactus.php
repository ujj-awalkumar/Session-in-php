<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("Contact uS.jpg");
        }
        table,tr{
            border: 2px solid greenyellow;
            background-color: thistle;
        }
    </style>
</head>

<body>
    <?php
    $conn=mysqli_connect("localhost","root","","cimage");
    if(!$conn){
        die("Connection failed").mysqli_connect_error();
    }else{
        if(!empty($_POST['name'])&&!empty($_POST['mobile'])&&!empty($_POST['email'])&&!empty($_POST['msg'])){
    $name=$_REQUEST["name"];
    $mobile=$_REQUEST["mobile"];
    $email=$_REQUEST["email"];
    $message=$_REQUEST["msg"];
    
    $query="INSERT INTO contactus(Name,Mobile,Email,Message) values('$name','$mobile','$email','$message')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "We will shortly contact you!!";
    }else{
        echo "failed!!";
    }
}

}
    ?>
    <form action="contactus.php" method="post">
        <table>
            <th><b><u>Contact us</u></b></th>
            <tr>
                <td>Enter your name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Enter your mobile number</td>
                <td><input type="number" name="mobile"></td>
            </tr>
            <tr>
                <td>Enter your email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Enter your query</td>
                <td><textarea name="msg" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>