<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php

    include 'connect.php';
    include 'navbar.php';
?>
    <form action="added.php" method="post" class="form">
    <h1>Add Rule</h1>
    <div class="error">
            <?php
                if($_GET['error']){
                    echo $_GET['error'];
                }
            ?>
        </div>
            <label class="ruleNo">Rule No</label>
         <input type="text" name="ruleno" id="ruleNo">
         <label class="ruleMsg">Rule Message</label>
         <input type="text" name="rule" id="ruleMsg">
         <input type="submit" value="submit" class="btn" name="submit">

    </form>
    
</body>
</html>