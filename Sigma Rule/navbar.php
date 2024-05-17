
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        a{
            color:currentColor;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="./index.php">
        <h1 class="logo">
            Sigma Rule
        </h1>
        </a>
        <ul class="links">
            <li><a href="abtus.php">About Us</a></li>

            <?php 
                session_start();
                if(isset($_SESSION['user'])){
                    ?>
            <li><a href="./addRule.php">Add Rule</a></li>
            <li><a href="./logout.php">Logout</a></li>

                    <?php
                }
                else{
            ?>
            <li><a href="./login.php">Login</a></li>
                    <?php
                }
                    ?>
        </ul>
    </nav>
</body>
</html>