<?php
    require 'functions.php';

    if(isset($_POST['submit']))
    {
        if(tambah($_POST)>0)
        {
            echo "
            <script>
                alert('Data Berhasil Disimpan');
                document.location.href='index.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('Data Gagal Disimpan');
                document.location.href='tambah_data.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="Nama" class="col-sm-2 control-label">Nama</label>
            <input type="text" name="Nama" id="Nama" required>
        </div>
        <div class="form-group">
            <label for="Nim" class="col-sm-2 control-label">Nim</label>
            <input type="text" name="Nim" id="Nim" required>
        </div>
        <div class="form-group">
            <label for="Email" class="col-sm-2 control-label">Email</label>
            <input type="text" name="Email" id="Email" required>
        </div>
        <div class="form-group">
            <label for="Jurusan" class="col-sm-2 control-label">Jurusan</label>
            <input type="text" name="Jurusan" id="Jurusan" required>
        </div>
        <div class="form-group">
            <label for="Gambar" class="col-sm-2 control-label">Gambar</label>
            <input type="text" name="Gambar" id="Gambar" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Tambah</button>
        </div>
    </form>
</body>
</html>