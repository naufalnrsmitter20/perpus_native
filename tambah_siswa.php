<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="col-6 mx-auto mt-5">
        <section>
            <h3>Tambah Siswa</h3>
            <form action="proses_tambah_siswa.php" method="post">
                <div class="mt-2">
                    <p class="fw-medium mt-3">
                        nama Siswa :
                    </p>
                    <input type="text" name="nama_siswa" class="form-control border border-info">
                </div>
                <div class="mt-2">
                    <p class=" fw-medium mt-3">
                        Tanggal Lahir :
                    </p>
                    <input type="date" name="tanggal_lahir" class="form-control border border-info">
                </div>
                <div class="mt-2">
                    <p class=" fw-medium mt-3">
                        Gender :
                    </p>
                    <select name="gender" id="gender" class="form-control border border-info">
                        <option></option>
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="mt-2">
                    <p class=" fw-medium mt-3">
                        Alamat :
                    </p>
                    <input type="text" name="alamat" class="form-control border border-info">
                </div>
                <div class="mt-2">
                    <p class=" fw-medium mt-3">
                        Username :
                    </p>
                    <input type="text" name="username" class="form-control border border-info">
                </div>
                <div class="mt-2">
                    <p class=" fw-medium mt-3">
                        Password :
                    </p>
                    <input type="password" name="password" class="form-control border border-info">
                </div>
                <div class="mt-2">
                    <p class=" fw-medium mt-3">
                        Kelas
                    </p>
                    <select name="id_kelas" class="form-control border border-info">
                        <option></option>
                        <?php 
                            include "connection.php";
                            $qry_kelas=mysqli_query($conn,"select * from table_kelas");
                            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
                            }
                        ?>
                    </select>
                </div>
                <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-info mt-3 mb-3">
            </form>
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>