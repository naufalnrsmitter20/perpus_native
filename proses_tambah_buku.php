<?php 

if($_POST) {
    $nama_buku = $_POST['nama_buku'];
    $foto = $_FILES['foto']['tmp_name'];
    $deskripsi = $_POST['deskripsi'];
    
    if(empty($nama_buku)){
        echo "<script>alert('Nama Buku Tidak Boleh Kosong');location.href = 'tambah_buku.php'</script>";
    } else if (empty($foto)){
        echo "<script>alert('Foto Tidak Boleh Kosong');location.href = 'tambah_buku.php'</script>";
    } else if (empty($deskripsi)){
        echo "<script>alert('Deskripsi Tidak Boleh Kosong');location.href = 'tambah_buku.php'</script>";
    } else {
        include "connection.php";
        $imageData = addslashes(file_get_contents($foto));
        $insert = mysqli_query($conn, "INSERT INTO buku (nama_buku, foto, deskripsi) VALUES ('".$nama_buku."', '".$imageData."', '".$deskripsi."')");
        if ($insert) {
            echo "<script>alert('Sukses Menambahkan Buku!');location.href = 'buku.php'</script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Buku!');location.href = 'tambah_buku.php'</script>";
        }
    }

}

?>