<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/woo.jpg" type="image">
    <title>Login Page</title>
    <style>
        @font-face {
            font-family: 'calli';
            src: url('./assets/calli.ttf');
        }

        @font-face {
            font-family: 'bare';
            src: url('./assets/BarefoodSignBrush-VGdaV.ttf');
        }

        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background: #fff;
            height: 100vh;
        }

        nav {
            border: none;
        }

        .nav-ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        .nav-ul li {
            padding: 10px;
        }

        .nav-ul li a {
            color: #538ea3;
            padding: 3px 10px 3px 10px;
            text-decoration: none;
            font-family: 'calli';
            font-size: 22px;
        }

        .nav-ul li a:hover {
            background-color: #538ea318;
        }

        .container {
            margin-top: 8rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-in {
            height: 430px;
            width: 340px;
            text-align: center;
            background-color: #10202a;
            backdrop-filter: blur(5px);
            box-shadow: rgba(0 0 0 / 89%) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            border-radius: 25px;
        }

        .h1 {
            height: 130px;
            background-image: url('./assets/bg2.jpg');
            background-size: cover;
            background-position: bottom;
            border-radius: 25px 25px 0 0;
            padding-top: 25px;
        }

        .h1 a {
            padding-top: 30px;
            font-family: 'bare';
            font-size: 50px;
            color: #fff;
        }

        input {
            padding: 5px;
            margin-bottom: 5px;
            height: 23px;
            width: 250px;
            color: white;
            font-size: 14px;
            border: none;
            background: rgba(255, 255, 255, 0.236);
        }

        ::placeholder {
            color: rgb(187, 187, 187);
        }

        button {
            margin-top: 5px;
            margin-bottom: 10px;
            padding: 5px;
            height: 35px;
            width: 260px;
            border: none;
            font-size: 15px;
        }

        .register {
            margin-top: 8px;
        }

        .register a {
            font-size: 17px;
            color: #fff;
            font-family: 'Calibri';
        }

        #error {
            color: red;
            font-weight: 600;
            font-family: 'Calibri';
        }

        @media screen and (max-width:440px) {
            nav {
                margin-left: 1%;
                margin-right: 1%;
            }

            .container {
                background-color: transparent;
                backdrop-filter: blur(0px);
            }
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
                <div class="register"><a>-OR-</a><br><a href="registerpage.php">Register</a></div>
            </form>
        </div>
    </div>
</body>

</html>