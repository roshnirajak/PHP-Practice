<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/woo.jpg" type="image">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->
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