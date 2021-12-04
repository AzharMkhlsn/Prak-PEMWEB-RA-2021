<?php
session_start();
if(isset($_SESSION['userID'])){
    header('Location:home.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percobaan mg8</title>
    <style>
        * {
            margin: 0;
            padding: 0;
         
        }
        background-color: white;

        body {
            min-height: 100vh;

            background: linear-gradient(263deg, #00000059, #00000036);
        }

        .body-bg {
            
            left: 0;
            bottom: 0;
            position: absolute;
            color: black;
        }

        .bucket {
            width: 25vw;
            background-color: rgba(67, 0, 220, 0.4);
            /* margin: 25vh auto; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 25px;
            font-size: 12pt;
         
        }

        .bucket p {
            text-align: center;
            text-transform: uppercase;
           
        }

        .login-field {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            text-shadow: 0 0 whitesmoke;
            font family : Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 600;
            opacity: 0.8;
            /* color: white; */
            border-radius: 7px;
        }

        .login-btn-submit {
            background-color: #46de4b;
            color: black;
            font family : Verdana, Geneva, Tahoma, sans-serif;
            font-size: 12pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .font{
            color: white;
            font family : Verdana; 
        }
    </style>
   
    
</head>

<body>

    
    <img src="./assets/wave.svg" alt="wave background" class="body-bg">
    <div class="bucket">
        <p class="font">Login For Continue </p>
        <form action="./login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Password..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
   
</body>

</html>