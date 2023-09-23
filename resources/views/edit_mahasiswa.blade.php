<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container p-3">
            <h1 class="text-center">Tambah Mahasiswa</h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <div class="form">
                        <form method="POST" action="{{ route('mahasiswa.update', $mahasiswas->id) }}">
                            @csrf
                            @method('PUT') 
    
                            <div class="mb-3">
                                <label for="namaInput" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="namaInput" name="nama" value="{{ $mahasiswas->nama }}">
                            </div>
    
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email</label>
                                <input type="text" class="form-control" id="emailInput" name="email" value="{{ $mahasiswas->email }}">
                            </div>
    
                            <div class="mb-3">
                                <label for="nimInput" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nimInput" name="nim" value="{{ $mahasiswas->nim }}">
                            </div>
    
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
