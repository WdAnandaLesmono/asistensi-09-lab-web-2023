<?php
include("./controllers/LoginAdmin.php");

if (isset($_POST['submit'])) {
    $register = new LoginAdmin($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: white;">
    <div class="container col-lg-4">
        <h1 class="text-center my-4">Admin Login</h1>

        <?php
        if (isset($_GET['message'])) {
            echo "<div class='alert alert-info' role='alert'>$_GET[message]</div>";
        }
        ?>

        <form method="POST">
            <div class="mb-3">
                <label for="admin_username" class="form-label">Username</label>
                <input type="text" class="form-control" name="admin_username" id="admin_username" required>
            </div>
            <div class="mb-3">
                <label for="admin_password" class="form-label">Password</label>
                <input type="password" class="form-control" name="admin_password" id="admin_password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" onclick="href='../Tugas Pekan 7/dashboard/index-admin.php'">Login</button>
        </form>
        <p>Belum punya akun?
            <a href="./register-admin.php" class="link-opacity-50-hover">Admin Register!</a>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
