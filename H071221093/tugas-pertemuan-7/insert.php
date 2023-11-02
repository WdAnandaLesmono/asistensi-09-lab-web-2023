<?php
require "dbController.php";

if (isset($_POST["submit"])) {
    if (insert($_POST)>0) {
        echo"
        <script>
            alert('insert success')
            document.location.href = 'admin.php'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('insert failed')
            document.location.href = 'insert.php'
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
</head>
<body>
    <style>
        #insert-content {
    text-align: center;
    margin: 20px auto;
    width: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 5px #888888;
    background-color: #f9f9f9;
}

#insert-content h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
<center>
    
        <div id="insert-content" class="insert-content">
            <h1>Insert Data Mahasiswa</h1>
            <form action="" method="post">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
                <br><br>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
                <br><br>
                <label for="prodi">prodi : </label>
                <input type="text" name="prodi" id="prodi" required>
                <br><br>
                <button type="submit" name="submit">Insert Data!</button>
                <br><br>
            </form>
        </div>
    </center>

</body>
</html>