<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>welcome</title>
</head>

<body>

    <?php
    $namaLengkap = $_POST['nama_depan'] . " " . $_POST['nama_belakang'];
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "Tidak ada";
    $negara = $_POST['negara'];
    $bahasa = isset($_POST['bahasa']) ? implode(", ", $_POST['bahasa']) : "Tidak ada";
    $bio = $_POST['bio'];
    ?>
    
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-start bg-body-secondary p-4 rounded">
            <h1>SELAMAT DATANG <span style="background-color: blue; padding: 2px 5px 2px 5px; border-radius: 5px; color: white;"><?= $namaLengkap; ?></span>!</h1>
            <p><b>Terima kasih telah bergabung di Website Kami. Media Belajar kita Bersama!</b></p><br>

            <h4>Nama Lengkap: <?= $namaLengkap; ?></h4>
            <h4>Jenis Kelamin: <?= $jenis_kelamin; ?></h4>
            <h4>Negara: <?= $negara; ?></h4>
            <h4>Bahasa Yang dikuasai: <?= $bahasa; ?></h4>
            <h4>Bio: <?= $bio; ?></h4>
        </div>
    </div>
</body>

</html>