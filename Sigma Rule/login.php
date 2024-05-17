<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Logins</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'navbar.php'
    ?>
    
    <form action="./loginBack.php" class="form" method="POST">
        <h1>Login</h1>
        <div class="error">
            <?php
                if($_GET['error']){
                    echo $_GET['error'];
                }
            ?>
        </div>
        <label for="pwd">Enter The Password</label>
        <div class="pwd">
        <input type="password" name="pwd" required placeholder="Password Here" id="pwd" autocomplete="off" autofill="off">
        <i class="bi bi-eye-slash" id="togglePassword"></i>
    </div>
        <input type="submit" name="submit" value="Login" class="btn">
    </form>

    <script>

        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#pwd");

            togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

    </script>
</body>
</html>