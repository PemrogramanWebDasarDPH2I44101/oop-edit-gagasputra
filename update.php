<?php
    require("data.php");
    
    $nim = $_GET['nim'];
    $result = $data -> select_data($nim);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title> EDIT </title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2> EDIT </h2>
                <hr>
                <form method="POST" action="data.php?update=data" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputNim">NIM :</label>
                    <input type="text" name="nim" id="inputNim" pattern="\d*" maxlength="10" class="form-control" value="<?php echo $row['nim']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama :</label>
                    <input type="text" name="nama" id="inputNama" class="form-control" maxlength="50" value="<?php echo $row['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputKelas">Kelas :</label>
                    <input type="text" name="kelas" id="inputKelas" class="form-control" maxlength="20" value="<?php echo $row['kelas']; ?>">
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