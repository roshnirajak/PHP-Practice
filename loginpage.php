<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/woo.jpg" type="image">
    <title>Login Page</title>
    <style>
        body {
            background: #fff;
            height: 100vh;
        }
        nav{
            border:none;
        }
        .nav-ul li a{
            color:#538ea3;
        }
        .nav-ul li a:hover{
            background-color: #538ea318;
        }
        .container-in {
            height: 430px;
            background-color:#10202a;
        }
        .h1 {
            background-image: url('./assets/bg2.jpg');
            background-position: bottom;
        }

        input {
            margin-bottom: 4px;
            font-size: 15px;
        }

        ::placeholder {
            color: rgb(187, 187, 187);
        }

        .register,
        .register a {
            font-size: 16px;
            color: #fff;
        }

        #error {
            color: red;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <script src="login_script.js"></script>
    <div class="navbar">
        <?php
        include('nav.php');
        ?>
    </div>
    <div class='container'>
        <div class='container-in'>
            <div class="h1" align="center"><a>LOGIN</a></div><br />
            <br />
            <form onsubmit="return login()" action="homepage.php">
                <input type="text" name="uname" id="uname" placeholder="Username"><br />

                <input type="password" name="pwd" id="pwd" placeholder="Password"><br />
                <span id="error"></span><br />
                <button type="submit">Submit</button><br>
                <span class="register">-OR-<br><a href="registerpage.php">Register</a></span>
            </form>
        </div>
    </div>
</body>

</html>