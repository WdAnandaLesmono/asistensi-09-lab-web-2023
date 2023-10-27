<?php 

require "loginHelper.php";

// $_SESSION = [];

if(isset($_POST['submit'])) {
    $login = new LoginHelper($_POST);
}
// if (!isset($_SESSION['login'])) {
//     header("Location: login.php");
//     exit;
// }

if (isset($_SESSION['login_admin'])) {
    header("Location: admin.php");
}
if (isset($_SESSION['login'])) {
    header("Location: user.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container col-4">
        <h1 class="text-center mt-4">Silahkan Login</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <p class="mt-2">Belum punya akun?
            <a class="link-opacity-50-hover" href="register.php">Daftar di sini!</a>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>