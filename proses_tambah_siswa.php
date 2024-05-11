<?php 

if($_POST) {
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];
    if(empty($nama_siswa)) {
        echo "<script>alert('Nama Siswa Tidak Boleh Kosong');location.href = 'tambah_siswa.php'</script>";
    } else if(empty($username)){
        echo "<script>alert('Username Tidak Boleh Kosong');location.href = 'tambah_siswa.php'</script>";
    } else if (empty($password)){
        echo "<script>alert('Password Tidak Boleh Kosong');location.href = 'tambah_siswa.php' </script>";
    } else {
        include "connection.php";
        $insert=mysqli_query($conn,"insert into table_siswa (nama_siswa, tanggal_lahir, gender, alamat, username, password, id_kelas) value ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id_kelas."')") or die 
        (mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses Menambahkan Siswa');location.href = 'tampil_siswa.php'</script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Siswa');location.href = 'tampil_siswa.php'</script>";
        }
    }
}

?>