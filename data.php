<?php
    class Data {
        private $connect;

        public function Data() {
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $database   = "db_oop";

            $this->connect = mysqli_connect ($servername, $username, $password, $database);
        }

        public function insert() {
            $nim    = $_POST['nim'];
            $nama   = $_POST['nama'];
            $kelas   = $_POST['kelas'];

            $foto = $_FILES['file']['name'];
            $tmp_foto = $_FILES['file']['tmp_name'];
            $dir = "foto/";
            $target = $dir.$foto;

            move_uploaded_file($tmp_foto, $target);

            $database = "INSERT INTO mahasiswa (nim, nama, kelas, foto) VALUES ('$nim', '$nama', '$kelas', '$target')";
            if (mysqli_query($this->connect, $database)) {
                ?>
                <script>
                    alert("Upload Berhasil");
                    location= "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Upload Gagal");
                    location= "index.php";
                </script>
                <?php
            }
        }

        public function view() {
            $database = "SELECT * FROM mahasiswa";
            return mysqli_query ($this->connect , $database);
        }

        public function select_data($nim) {
            $database = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
            return mysqli_query($this->connect, $database);
        }

        public function update() {
            $nim    = $_POST['nim'];
            $nama   = $_POST['nama'];
            $kelas   = $_POST['kelas'];

            $foto = $_FILES['file']['name'];
            $tmp_foto = $_FILES['file']['tmp_name'];
            $dir = "foto/";
            $target = $dir.$foto;

            move_uploaded_file($tmp_foto, $target);

            $database = "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', foto = '$target' WHERE nim = '$nim'";
            if (mysqli_query($this->connect, $database)) {
                ?>
                <script>
                    alert("Edit Berhasil");
                    location= "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Edit Gagal")
                </script>
                <?php
            }
        }

        public function delete($nim) {
            $database = "DELETE FROM mahasiswa WHERE nim = '$nim'";
            if (mysqli_query($this->connect, $database)) {
                ?>
                <script>
                    alert("Delete Berhasil");
                    location= "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Delete Gagal");
                    location= "index.php";
                </script>
                <?php
            }
        } 
    }

    $data = new Data();
    if (isset($_GET['insert'])) {    
        $data -> insert();
    }

    if (isset($_GET['update'])) {
        $data -> update();
    }

    if (isset($_GET['delete'])) {
        $data -> delete($_GET['delete']);
    }

    
?>
