<?php
require "dbController.php";
if (isset($_POST["submit"])) {
    if (regist($_POST)>0) {
        echo"
        <script>
            alert('registration success')
            document.location.href = 'login.php'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('registration failed')
            document.location.href = 'register.php'
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container col-4">
            <h1 class="text-center mt-4">Silahkan Registrasi</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">confirm password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <p class="mt-2">Sudah Punya Akun?
            <a class="link-opacity-50-hover" href="login.php">Login di sini!</a>
        </p>
    </div>
</body>
</html>