<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/woo.jpg" type="image">
    <title>Registration Page</title>
    <style>
        body {
            background: #fff;
            height:100vh
        }

        nav {
            border: none;
        }
        .nav-ul li a {
            color: #cb202eba;
        }

        .nav-ul li a:hover {
            background-color: #cb202e10;
        }

        input {
            margin-bottom: 4px;
            color: #fff;
            background: #ededed1f;
            font-size: 14px;
        }

        ::placeholder {
            color: #ffffffc4;
        }

        button[type=submit] {
            background-color:#dd2932db;
            color:#fff;
        }

        .h1 {
            background-image: url('./assets/bg33.png');
        }

        form {
            margin-top: 20px;
        }

        #error {
            color: red;
            font-weight: 600;
            text-align: center;
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
                
                    <button type="submit" style="margin-right:15px; margin-left:0;">Submit</button><input type="reset" value="Reset">
                
            </form>
        </div>

    </div>

</body>

</html>