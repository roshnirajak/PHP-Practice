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
            border-color: #fff;
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
            
            height:350px;
            width:340px
        }
        .h1{
            font-family: 'bare';
            font-size:50px;
            color:#fff;
            padding-top: 10px
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
    <div id="navbar">
        <?php
        include('nav.php');
        ?>
    </div>
    <div class="reg-form">
        <div class="reg-form-in">
            <div class="h1">Registration Form</div>
            <form action="homepage.php">
                <input type="text" name="name" id="" placeholder="Your Name"><br />
                <input type="email" name="email" id="" placeholder="Email"><br />
                <input type="number" name="mob-num" id="" placeholder="Mobile Number"><br />
                <input type="date" name="dob" id="" placeholder="Date of Birth"><br />
                <input type="password" name="pwd" id="" placeholder="Password"><br />
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>