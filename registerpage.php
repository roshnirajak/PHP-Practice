<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/woo.jpg" type="image">
    <title>Registration Page</title>
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
            height: 100vh
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
            color: #cb202eba;
            padding: 3px 10px 3px 10px;
            text-decoration: none;
            font-family: 'calli';
            font-size: 22px;
        }

        .nav-ul li a:hover {
            background-color: #cb202e10;
        }

        input {
            padding: 5px;
            height: 23px;
            width: 250px;
            margin-bottom: 4px;
            border: none;
            color: #fff;
            background: #ededed1f;
            /* font-size: 14px; */
        }

        ::placeholder {
            color: #ffffffc4;
        }

        button[type=submit] {
            background-color: #dd2932db;
            color: #fff;
        }

        form {
            margin-top: 20px;
        }

        .container {
            margin-top: 6.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-in {
            height: 530px;
            width: 340px;
            text-align: center;
            background-color: #000;
            backdrop-filter: blur(5px);
            box-shadow: rgba(0 0 0 / 89%) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            border-radius: 25px;
        }

        .h1 {
            height: 130px;
            background-image: url('./assets/bg33.png');
            background-size: cover;
            background-position: center 30%;
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

        button,
        input[type=reset] {
            margin-top: 8px;
            margin-bottom: 5px;
            padding: 5px;
            height: 35px;
            width: 120px;
            border: none;
            font-size: 15px;
        }

        #error {
            color: red;
            font-weight: 600;
            font-family: 'Calibri';
            text-align: center;
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
    <script src="register_script.js"></script>
    <div class="navbar">
        <?php
        include('nav.php');
        ?>
    </div>
    <!-- <img src="assests/bg33.png" alt="woosung" width="100%"> -->
    <div class="container">

        <div class="container-in">
            <div class="h1"><a>Registration Form</a></div>
            <form onsubmit="return register()" action="loginpage.php">
                <input type="text" name="name" id="name" placeholder="Your Name" value=""><br />
                <input type="text" name="uname" id="uname" placeholder="Username" value=""><br />
                <input type="email" name="email" id="email" placeholder="Email" value=""><br />
                <input type="number" name="mob-num" id="mob" placeholder="Mobile Number" value=""><br />
                <input type="date" name="dob" id="dob" placeholder="MM/DD/YYYY" value=""><br />
                <input type="password" name="pwd" id="pwd" placeholder="Password" value=""><br />
                <input type="password" name="confirm_pwd" id="con_pwd" placeholder="Confirm Password" value=""><br />
                <span id="error"></span><br />

                <button type="submit" style="margin-right:15px; margin-left:0;">Submit</button><input type="reset"
                    value="Reset">

            </form>
        </div>

    </div>

</body>

</html>