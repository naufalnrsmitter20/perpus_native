<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Buku (Khusus Admin)</title>
</head>

<body>
    <main class="col-8 mx-auto mt-5">
        <h3>Tambah Buku</h3>
        <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
            <p class="fw-medium mt-3">
                nama Buku :
            </p>
            <input type="text" name="nama_buku" value="" class="form-control border border-info">
            <p class="fw-medium mt-3">
                Foto :
            </p>
            <input type="file" name="foto" value="" class="form-control border border-info">
            <p class="fw-medium mt-3">
                Deskripsi :
            </p>
            <input type="text" name="deskripsi" value="" class="form-control border border-info">
            <input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary mt-3">
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>