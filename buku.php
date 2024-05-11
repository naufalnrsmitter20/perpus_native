<?php 
    include "header.php";
?>
<div class="d-flex justify-content-between ">
    <h2>Daftar Buku</h2>
    <button type="button" onclick="window.location.href = 'tambah_buku.php'" class="btn btn-info">Tambah Buku</button>
</div>
<div class="row">
    <?php 
    include "connection.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        $imageData = base64_encode($dt_buku['foto']);
        $imageFormat = 'data:image/jpeg;base64,'; 

        ?>
    <div class="col-md-3">
        <div class="card " style="width: 18rem;">
            <img src="<?= $imageFormat . $imageData ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $dt_buku['nama_buku'] ?></h5>
                <p class="card-text"><?= substr($dt_buku['deskripsi'], 0, 20) ?></p>
                <a href="pinjam_buku.php?id_buku=<?= $dt_buku['id_buku'] ?>" class="btn btn-info">Pinjam</a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>