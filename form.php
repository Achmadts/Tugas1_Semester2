<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="text-start bg-body-secondary px-5 py-4 rounded">
            <h1>Buat Account Baru</h1>
            <h3 class="mb-4">Sign Up Form</h3>
            <form method="POST" action="welcome.php">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nama_depan" id="nama_depan" required placeholder="Masukkan nama depan">
                    <label for="nama_depan">Nama Depan</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" required placeholder="Masukkan nama belakang">
                    <label for="nama_belakang">Nama Belakang</label>
                </div>

                <label class="mb-2">Jenis Kelamin</label><br>
                <input type="radio" class="btn-check" name="jenis_kelamin" value="Laki-laki" id="laki2">
                <label for="laki2" class="btn btn-primary">Laki-laki</label>

                <input type="radio" class="btn-check" name="jenis_kelamin" value="Perempuan" id="perempuan">
                <label for="perempuan" class="btn btn-primary">Perempuan</label>

                <br>

                <label for="negara" class="mt-4 mb-2">Negara</label><br>
                <select class="form-select" name="negara" id="negara">
                    <option value="Indonesia" selected>Indonesia</option>
                    <option value="Inggris">Inggris</option>
                </select>
                <br>

                <label class="mb-2 mt-2">Bahasa Yang dikuasai</label><br>
                <input type="checkbox" class="btn-check" name="bahasa[]" value="Bahasa Indonesia" id="indo">
                <label for="indo" class="btn btn-outline-primary mb-1">Bahasa Indonesia</label><br>

                <input type="checkbox" class="btn-check" name="bahasa[]" value="Bahasa Inggris" id="inggris">
                <label for="inggris" class="btn btn-outline-primary">Bahasa Inggris</label>

                <input type="checkbox" class="btn-check" name="bahasa[]" value="Lainnya" id="lainnya">
                <label for="lainnya" class="btn btn-outline-primary mb-1">Lainnya</label>

                <br>

                <div class="form-floating mt-5 mb-2">
                    <textarea class="form-control" placeholder="Masukkan bio kamu" name="bio" id="bio" cols="30" rows="10" required style="height: 100px"></textarea>
                    <label for="bio" name="bio">Bio</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Sign Up</button><br><br>
            </form>
        </div>
    </div>
</body>

</html>