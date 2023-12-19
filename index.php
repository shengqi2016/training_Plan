<?php
/*
 * Author: Qi Sheng
 * Date: 2022-12-01
 * Class: CIS-2288
 * Description: Practical Final 1
 */
?>
<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            #content {
                width: 90%;
                height: auto;
            }
        }

        #content {
            width: 30%;
            height: 30%;
            border-style: solid;


        }

        .centered-container {
            background-image: url("resources/chinese_background.png") ;
            background-size: cover;
            background-position: center;
            display: grid;
            place-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="centered-container">
    <div class="container text-center" id="content">
        <h1>Login</h1>
        <br>
        <br>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</div>

</body>
