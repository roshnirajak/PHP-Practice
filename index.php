<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <style>
        body {
            background: #000;
            background-image: url('./assests/bg2.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            font-size: 18px;
        }
        input {
            margin-bottom: 4px;
        }
        ::placeholder {
            color:  rgb(187, 187, 187);
        }
        .register, .register a{
            font-size:16px;
            color:#fff;
        }
    </style>
</head>

<body>
    <div class='container'>
        <div class='container-in'>
            <span class="login" align="center">LOGIN</span><br />
            <br />
            <form action="homepage.php">
            <input type="text" name="uname" id="uname" placeholder="Username"><br />

            <input type="password" name="pwd" id="pwd" placeholder="Password"><br />
            <button type="submit">Submit</button><br>
            <span class="register">-OR-<br><a href="registerpage.php">Register</a></span>
            </form>
        </div>
    </div>
</body>
</html>