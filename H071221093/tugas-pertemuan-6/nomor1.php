<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <style>
        *{margin: 0px;}
        #primary-container{
        background-color: #C1D8C3;
        padding: 10px;
        display: flexbox;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        }

        #submit-button{
        padding: 10px;
        border-radius: 5px;
        color: blue;
        margin-top: 3px;
        }

        #data-card{
            margin: 10px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);

        }

        #data-card div{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            background-color: #6A9C89;
            height: 150px;
            width: 150px;
            margin: 20px;
            border-radius: 10px;
            align-items: center;
            justify-items: center;
        }
    </style>
    <center>
        <div id="primary-container">
            <div id="form-container">
                <h1>Data Barang</h1>
            </div>
            <div id="data-container">
                <form method="post" action="">
                    <label for="nama">Barang : </label> 
                    <input type="text" id="nama" name="jenis_barang" ><br>
                    <input type="submit" id="submit-button" value="Tampilkan">
                </form>
            </div>
        </div>
    </center>
    <?php
    $data = [
        [
            "nama" => "HP",
            "harga" => 3000000,
            "stok" => 10,
            "jenis_barang" => "Elektronik"
        ],
        [
            "nama" => "Jeruk",
            "harga" => 5000,
            "stok" => 20,
            "jenis_barang" => "Buah"
        ],
        [
            "nama" => "Kemeja",
            "harga" => 5000,
            "stok" => 9,
            "jenis_barang" => "Pakaian"
        ],
        [
            "nama" => "Apel",
            "harga" => 5000,
            "stok" => 5,
            "jenis_barang" => "Buah"
        ],
        [
            "nama" => "Celana",
            "harga" => 5000,
            "stok" => 10,
            "jenis_barang" => "Pakaian"
        ],
        [
            "nama" => "Laptop",
            "harga" => 50000,
            "stok" => 30,
            "jenis_barang" => "Elektronik"
        ],
        [
            "nama" => "Semangka",
            "harga" => 5000,
            "stok" => 2,
            "jenis_barang" => "Buah"
        ],
        [
            "nama" => "Kaos",
            "harga" => 5000,
            "stok" => 1,
            "jenis_barang" => "Pakaian"
        ],
        [
            "nama" => "VGA",
            "harga" => 2000000,
            "stok" => 0,
            "jenis_barang" => "Elektronik"
            ]
        ];
        
        if (!empty($_POST['jenis_barang'])) { 
            $jenis_barang = $_POST['jenis_barang'];
            echo '<div id="data-card">';  
            foreach ($data as $barang) { //setiap elemen dari array akan disimpan dalam variabel $barang.
                foreach ($barang as $item) {
                    if (strcasecmp($item, $jenis_barang) === 0) { 
                        echo '<div>';
                        echo '<h3>'. $barang['nama']. '</h3>';
                        echo '<p>'. 'stok: '. $barang['stok']. '</p>';
                        echo '<p>'. 'harga: '. $barang['harga']. '</p>';
                        echo '</div>';  
                    }
                }
            }
            echo '</div>';
    }else {
        echo '<div id="data-card">';  
        foreach ($data as $barang) {
            echo '<div>';
            echo '<h3>'. $barang['nama']. '</h3>';
            echo '<p>'. 'stok: '. $barang['stok']. '</p>';
            echo '<p>'. 'harga: '. $barang['harga']. '</p>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
</body>
</html>