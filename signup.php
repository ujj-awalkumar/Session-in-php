<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: blanchedalmond;
        }
        table{
            border: 2px solid greenyellow;
        }
    </style>
</head>
<body>
   <center>
        <form action="signup_php.php" method="post">
            <table>
                <th><u><b>Sign up</b></u></th>
                <tr>
                    <td>Name <font style="color:red;">*</font></td>
                    <td><input type="text" name="name" required title="Mandatory field"></td>
                </tr>
                <tr>
                    <td>Email <font style="color:red;">*</font></td>
                    <td><input type="email" name="email" required title="Mandatory field"></td>
                </tr>
                <tr>
                    <td>Password <font style="color:red;">*</font></td>
                    <td><input type="password" name="password" required title="Mandatory field"></td>
                </tr>
                <tr>
                    <td>Gender <font style="color:red;">*</font></td>
                    <td><input type="radio" name="gender" value="Male" required title="Mandatory field">Male <input type="radio" value="Female">Female</td>
                </tr>
                <tr>
                    <td>Profession <font style="color:red;">*</font></td>
                    <td><input type="radio" name="profession" value="Student" required title="Mandatory field">Student <input type="radio" value="Faculty">Faculty</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Create account"></td>
                </tr>
                <tr align="right">
                    <td colspan="2"><a href="index.php">login_page</a></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>