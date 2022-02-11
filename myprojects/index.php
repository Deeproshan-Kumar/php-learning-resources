<?php
include_once __DIR__.'/connection/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            width: 100vw;
        }

        input{
            padding: 5px;
            height: 100%;
            width: 100%;
        }

        input[type="submit"]{
            background: orange;
            border: none;
            cursor: pointer;
            outline: none;
        }
    </style>
</head>
<body>
    <h2>Register Here...</h2>
    <br>
    <form action="insert.php" method="POST" enctype="multipart/form-data">
        <table cellspacing="15px">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname"></td>
            </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Email</td> 
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <td>Create Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="cpassword" name="cpassword"></td>
        </tr>
        <tr>
            <td>Profile Pic</td>
            <td><input type="file" name="profilepic"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Register"></td>
        </tr>
    </table>
    </form>
</body>
</html>