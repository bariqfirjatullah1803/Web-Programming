<?php
session_start();
$sql = "SELECT * FROM pegawai AS t1 JOIN jabatan AS t2 ON t1.id_jabatan = t2.id_jabatan";
$data = mysqli_query($con, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
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
        <h1>Data Pegawai</h1>
        <div class="card">
            <div class="card-body">
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['success'] ?>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>
                <a href="../index.php?page=create" class="btn btn-primary float-end">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($data)): ?>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <?php echo $row['nama_pegawai'] ?>
                                </td>
                                <td>
                                    <?= $row['tgl_lahir'] ?>
                                </td>
                                <td>
                                    <?= $row['nama_jabatan'] ?>
                                </td>
                                <td>
                                    <a href="../index.php?page=edit&id=<?= $row['id_pegawai'] ?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="../index.php?page=delete&id=<?= $row['id_pegawai'] ?>"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>