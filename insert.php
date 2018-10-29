<!DOCTYPE html>
<html>
<head>
    <title> Registrasi </title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2> REGISTRASI </h2>
                <hr>
                <form method="POST" action="data.php?insert=data" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputNim">NIM :</label>
                    <input type="text" name="nim" id="inputNim" pattern="\d*" maxlength="10" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama :</label>
                    <input type="text" name="nama" id="inputNama" class="form-control" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="inputKelas">Kelas :</label>
                    <input type="text" name="kelas" id="inputKelas" class="form-control" maxlength="20">
                </div>
                <div class="form-group">
                <label for="inputGambar"> Gambar : </label>
                    <input type="file" name="file" id="inputGambar" class="form-control-file">
                </div>
                    <input type="submit" value="KIRIM" id="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
