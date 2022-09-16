<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
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
   <div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Deskripsi Produk</th>
                    <th scope="col">Gambar Produk</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($product as $item)    
                  <tr>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->deskripsi_produk }}</td>
                    <td><img width="150px" src="{{ url('/images/'.$item->gambar_produk) }}" alt=""></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
