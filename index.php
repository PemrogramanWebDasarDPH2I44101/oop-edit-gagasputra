<!DOCTYPE html>
<html>
<head>
    <title> Data Mahasiswa </title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <div class="container">
    <a href="insert.php"><input type="button" value="Tambah Data" class="btn btn-primary"></a>
        <div class="row">
            <div class="col">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th> NIM </th>
                            <th> Nama </th>
                            <th> Hobi </th>
                            <th width="15%"> Foto </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require("data.php");
                            $result = $data -> view();
                            $isi = mysqli_num_rows($result);

                            if($isi != 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['nim']; ?></td>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['kelas']; ?></td>
                                        <td><img src="<?php echo $row['foto']; ?>" width="100%"></td>
                                        <td><a href="update.php?nim=<?php echo $row['nim']; ?>"><input type="button" value="Edit" class="btn btn-primary"></a> <a href="data.php?delete=<?php echo $row['nim']; ?>"><input type="button" value="Delete" class="btn btn-danger"></a></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
