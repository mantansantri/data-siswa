<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nama</span>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Jurusan</span>
                <input type="text" class="form-control" placeholder="Jurusan" name="jurusan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Kelas</span>
                <input type="text" class="form-control" placeholder="Kelas" name="kelas">
            </div>

            <button type="submit" class="btn btn-primary">Edit Data</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>