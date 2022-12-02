<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/woo.jpg" type="image">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->
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
            font-family: 'Calibri Light';
        }

        body {
            background: #e8ad2e;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .navbar {
            margin-top: 3px;
        }

        nav {
            margin-right: 30%;
            margin-left: 30%;
            border: 2.7px solid #efceaa
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
            padding: 3px 10px 3px 10px;
            text-decoration: none;
            color: #ffff;
            font-family: 'calli';
            font-size: 22px;
        }

        .nav-ul li a:hover {
            background-color: #efceaa5f;
        }

        .mid {
            margin-top: 3px;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('./assets/mid2.png');
            background-position: center 25%;
            margin-left: 30%;
            margin-right: 30%;
            height: 100vh;
        }

        @media screen and (max-width:440px) {
            nav {
                margin-left: 1%;
                margin-right: 1%;
            }

            .mid {
                margin-top: 3px;
                background-position: center 25%;
                margin-left: 0%;
                margin-right: 0%;
            }
        }
    </style>
</head>

<body>
    <!-- <script>
        $(function () {
            $('.navbar').load('nav.php');
        });
    </script> -->

    <div class='navbar'>
        <?php
        include("nav.php");
        ?>
    </div>
    <div class="mid">
        <div class="mid-content"></div>
    </div>
</body>

</html>