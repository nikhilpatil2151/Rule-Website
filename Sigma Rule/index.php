<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sigma Rule</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Blaka&display=swap" rel="stylesheet">
</head>
<body>

<?php
    include 'navbar.php';
?>

    <main class="arena">
        <?php
            include 'connect.php';
            $sql = "SELECT * FROM rule";
            $res = mysqli_query($conn, $sql);

            while($data = mysqli_fetch_assoc($res)){

        ?>
        <div class="card">
            <h2 class="title">
                Sigma Rule #0<?php echo $data['ruleno'] ?>
            </h2>
            <div class="txt">
            <?php echo $data['ruletxt'] ?>
            </div>
        </div>
        <?php
            }
        ?>
    </main>
    
</body>
</html>