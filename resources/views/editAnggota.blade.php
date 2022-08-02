<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Edit Anggota</title>
</head>

<body>
    <div class="container-fluid g-0">
        <div class="row g-0">
            <div class="col-2 bg-dark">
                <ul class="nav flex-column">
                    <li class="nav-item text-center mt-2">
                        <p class="text-white fs-5 fw-bold "><i class="bi bi-envelope fs-3 me-2"></i>Admin
                            SaCode</p>
                    </li>
                    <li class="nav-item fs-5 ">
                        <a class="nav-link text-white" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="nav-link text-white" href="#">Anggota</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="nav-link text-white" href="#">Kegiatan</a>
                    </li>
                    <div class="badge bg-light fs-5 text-wrap text-dark" style="width: 14rem;">
                        SaCode's Weekend WorkShop
                    </div>

                </ul>
            </div>
            <div class="col-10">
                <nav class="navbar bg-secondary">
                    <div class="container-fluid">
                        <p class="navbar-brand fs-4 fw-bold ms-auto">Admin<i
                                class="bi bi-person-circle ms-2 text-dark"></i></p>
                    </div>
                </nav>

                <div class="row mt-3 ms-3 mb-3 g-0">
                    <div class="col-9">
                        <p class="h3 fw-bold">Edit Anggota</p>
                    </div>
                    <div class="col-2 ms-auto">
                        <a type="button" class="btn btn-primary" href="{{ url('anggota') }}">Kembali</a>
                    </div>
                </div>

                <div class="container p-4">
                    <form action="{{ url('anggota/'.$model->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="mb-3 ">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" value="{{ $model->nama }}">
                          </div>
                          <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" value="{{ $model->alamat }}">
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email" value="{{ $model->email }}">
                          </div>

                          <button type="submit" class="btn btn-info">Simpan</button>
                    </form>
                </div>

                <nav class="navbar bg-secondary mt-3">
                    <div class="container-fluid">
                        <p class="navbar-brand m-auto  text-white">Copyright<i class="bi bi-c-circle"></i>
                            Your
                            Website 2022
                        </p>
                    </div>
                </nav>


            </div>
        </div>
    </div>
</body>

</html>