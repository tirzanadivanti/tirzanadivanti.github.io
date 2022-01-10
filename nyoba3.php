
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- font saya -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <!-- CSS saya -->
    <link rel="stylesheet" type="text/css" href="css/catalog.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>CAMP-UPrent | Katalog</title>
</head>
<?php 
    session_start();
        if (isset($_SESSION['level']) && isset($_SESSION['username'])){

            // ini adalah halam dengan level user
            if ($_SESSION['level'] == "user") {
                echo "<script></script>";
            }else {
                echo "Anda belum terdaftar sebagai User";
            }
        }
        // jika user belum terdaftar maka akan diarahkan ke halaman register.php
        if (!isset($_SESSION['level'])) {
            echo "</h1>Anda tidak boleh mengakses halaman ini tanpa : ";
            echo "<a href='login.php'>Login</a><br>";
            echo "<a href='daftar.php'>Belum punya User?</a></h1>";
            }   
?>
<body>
    <!-- awal navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="beranda.php">CAMP-UPrent</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-nav ml-auto mr-4">
                    <a class="nav-link nav-item active" href="beranda.php">BERANDA <span
                    class="sr-only">(current)</span></a>
                    <a class="nav-link nav-item active" href="katalog.php">KATALOG</a>
                    <a class="nav-link nav-item active" href="artikel.php">ARTIKEL</a>
                    <!-- <a class="nav-link nav-item active" href="file:///D:/WEB4/login.html">MASUK</a> -->
                    <a href="logout.php" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
                
                    <!-- <div class="dropdown">
                    <div type="button" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="img/profil.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="dropdown-menu">
                        <span class="dropdown-item-text"><?php echo "<b>".$_SESSION['username']."</b><br>"; ?></span>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                    </div> -->
                </div>
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->


    <!-- awal JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span class="font-weight-bold">KATALOG</span></h1>
        </div>
    </div>
    <!-- akhir JUMBOTRON -->



    <!-- NAV SAMPING -->
    <div class="row mt-4 no-gutters">
        <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-2">
                <li class="list-group-item bg-secondary">Kategori Produk</li>
                <a href="mendaki.php" class="list-group-item list-group-item-action">Mendaki</a>
                <a href="berkemah.php" class="list-group-item list-group-item-action">Berkemah</a>
                <a href="menyelam.php" class="list-group-item list-group-item-action">Menyelam</a>
            </ul>
        </div>

        <!-- akhir NAV SAMPING -->

            <?php
                include "koneksi.php"; //panggil file koneksi
                $query="SELECT*FROM barang"; //buat query sql
                $hasil=mysqli_query($koneksi,$query); //jalankan query sql
            ?>
        <div class="col-md-10">
            <div class="row no-gutters">
                <?php $i=1; 
                foreach($hasil as $value) : $i++;?>
                <div class="col-lg-3">
                    <div class="kotak-item" id="gambar1">
                        <img src="img/tenda2.jpg" alt="">
                        <p class="nama-item "><?php echo $value['nama_barang'];?></p>
                        <p class="harga-item"><?php echo $value['harga'];?></p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</button>
                    </div>
                </div>
                    <?php endforeach; ?>
            </div>  
        </div>
    </div>


    <!-- awal FOOTER -->

    <footer class="bg-dark p-5 text-white">
        <div class="container text-center">
            <p class="font1">Kontak Kami</p>
            <hr width="400px" color="gray">
            <p><img src="img/rumah.png" width="1.5%" /> <b>Alamat: </b>Jl.Raya Argotirto No.28, Malang</p>
            <p><img src="img/telepon.png" width="1.5%" /> <b>Telp: </b>+6287654321098</p>
            <p><img src="img/amplop.png" width="1.5%" /> <b>Email: </b>campuprent@gmail.com</p>
            <hr width="400px" color="gray">
        </div>
    </footer>


    <!-- akhir FOOTER -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- java saya -->
    <script src="js/main.js"></script>
    <!--Avatar email Profil  -->
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
    </script>
    <!-- Akhir Avatar email Profil  -->


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>