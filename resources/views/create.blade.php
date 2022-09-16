<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active bg-primary rounded text-white" aria-current="page" href="/create">Tambah Data</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <div class="container mt-3">
    <div class="row mb-3">
        <div class="col-md-12">
            <h3>Tambahkan Produk</h3>
            <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">    
                @csrf
                <div class="mb-3">
                  <label for="nama_produk" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" name="nama_produk" id="nama_produk">
                </div>
                <div class="mb-3">
                    <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                    <input type="text" class="form-control" name="deskripsi_produk" id="deskripsi_produk">
                </div>
                <div class="mb-3">
                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                    <input class="form-control" type="file" id="gambar_produk" name="gambar_produk">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
