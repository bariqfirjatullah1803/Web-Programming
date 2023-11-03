<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form FILE</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="foto"><input type="submit" value="Upload">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaFile = $_FILES['foto']['name'];
        $lokasifile = $_FILES['foto']['tmp_name'];

        if ($namaFile != "") {
            move_uploaded_file($lokasifile, "file/" . $namaFile);
            echo "<br> <img src='file/$namaFile' width='200'/>";
        }
    }
    ?>
</body>

</html>