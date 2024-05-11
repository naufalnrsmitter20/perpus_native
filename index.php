<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <section class="col-10 mt-5 mx-auto">
        <div class="bg-info py-2 px-2">
            <h2>Selamat Datang di Aplikasi Perpustakaan dengan Menggunakan PHP Native!</h2>
        </div>
        <h4 class="text-success mt-4">Pilih Opsi Berikut ini untuk Memulai Aksi</h4>
        <div class="row mt-3 gap-3 mx-auto">
            <div class="card col-3 border-info">
                <div class="card-body">
                    <h5 class="card-title">Tambah Kelas</h5>
                    <p class="card-text">Disini, kamu dapat menambahkan Kelas yang dapat digunakan untuk memilih kelas
                        pada form Tambah Siswa
                    </p>
                    <button type="button" onclick="window.location.href = 'tambah_kelas.php'" class="btn btn-info">Klik
                        disini</button>
                </div>
            </div>
            <div class="card col-3 border-info">
                <div class="card-body">
                    <h5 class="card-title">Tambah Siswa</h5>
                    <p class="card-text">Disini, kamu dapat menambahkan siswa untuk keperluan login dan pengisian data
                    </p>
                    <button type="button" onclick="window.location.href = 'tambah_siswa.php'" class="btn btn-info">Klik
                        disini</button>
                </div>
            </div>
            <div class="card col-3 border-info">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <p class="card-text">Disini, kamu dapat Login untuk meminjam buku di perpustakaan ini
                    </p>
                    <button type="button" onclick="window.location.href = 'login.php'" class="btn btn-info">Klik
                        disini</button>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>