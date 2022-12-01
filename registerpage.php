<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body {
            background-image: url('./assests/bg3.png');
            background-position: center;
            height: 100vh;
            backdrop-filter:blur(5px);
        }
        nav{
            border:1px solid #fff;
        }
        .nav-ul li a:hover{
            background-color: #d3424e39;
        }
        input {
            margin-bottom: 4px;
            color: #fff;
            background: #ededed1f  /*#cb2a1881; */
        }

        ::placeholder {
            color: #ffffffc4;
        }
        button[type=submit] {
            background-color: #fff;
        }
        .reg-form {
            margin: 6% auto auto auto;
            display: flex;
            justify-content: center;
            align-items: center;;
        }
        .reg-form-in {
            text-align: center;
            background-color: #f5c1c11a;
            backdrop-filter: blur(5px);
            
            height:420px;
            width:340px
        }
        .h1{
            font-family: 'bare';
            font-size:50px;
            color:#fff;
            padding-top: 10px
        }
        #error{
            color:red;
            font-weight:600;
            text-align: center;
        }
        @media screen and (max-width:440px){
            .reg-form-in {
            background-color: transparent;
            backdrop-filter: blur(0px);
            }
        }
    </style>
</head>

<body>
    <script src="register_script.js"></script>
    <div id="navbar">
        <?php
        include('nav.php');
        ?>
    </div>
    <div class="reg-form">
        <div class="reg-form-in">
            <div class="h1">Registration Form</div>
            <form onsubmit="return register()" action="homepage.php">
                <input type="text" name="name" id="name" placeholder="Your Name" value=""><br />
                <input type="text" name="uname" id="uname" placeholder="Username" value=""><br />
                <input type="email" name="email" id="email" placeholder="Email" value=""><br />
                <input type="number" name="mob-num" id="mob" placeholder="Mobile Number" value=""><br />
                <input type="date" name="dob" id="dob" placeholder="Date of Birth" value=""><br />
                <input type="password" name="pwd" id="pwd" placeholder="Password" value=""><br />
                <input type="password" name="confirm_pwd" id="con_pwd" placeholder="Confirm Password" value=""><br />
                <span id="error"></span><br />
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>