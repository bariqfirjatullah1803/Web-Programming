<?php
$sql_jabatan = "SELECT * FROM jabatan";
$data_jabatan = mysqli_query($con, $sql_jabatan);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pegawai = $_POST["nama_pegawai"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $id_jabatan = $_POST["jabatan"];

    $sql = "INSERT INTO pegawai(nama_pegawai,tgl_lahir,id_jabatan) VALUES ('$nama_pegawai', '$tgl_lahir', $id_jabatan)";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: index.php");
    } else {
        header("location");
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">PHP</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <h1>Edit Pegawai</h1>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama-pegawai" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama-pegawai" name="nama_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl-lahir" name="tgl_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <?php while ($row = mysqli_fetch_assoc($data_jabatan)): ?>
                                <option value="<?= $row['id_jabatan'] ?>">
                                    <?= $row['nama_jabatan'] ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>