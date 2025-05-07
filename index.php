<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>shop</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="foto_produk/icon.jpg">
</head>

<body>
    <!-- navbar -->
    <?php include 'menu.php'; ?>


    <!-- konten -->
    <section class="konten">
        <div class="container">
            <h1>Produk Terbaru</h1>

            <div class="row">

                <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
                <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" style="width:100%; height:150px;">
                            <div class="caption">
                                <div style="font-size:16px; overflow:hidden; height:1.2em; width:100%; text-overflow: ellipsis; white-space: nowrap;">
                                    <?php echo $perproduk['nama_produk']; ?>
                                </div>
                                <h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
                                <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
                                <a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">detail</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

</body>

</html>