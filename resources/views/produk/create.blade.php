<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</p></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/produk">Produk</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      
      <div class="col-sm-12">
        <div class="contrainer"style="margin-left: 30px">
        <h1>Form Tambah Produk</h1>
        <form action="" method="GET">
        <div class="row">
        <div class="col-sm-6">
            <label for="">Kode Produk</label>
            <input type="number" name="kode_produk" class="form-control" placeholder="Input Kode Produk">
          </div>
          <div class="col-sm-6">
            <label for="">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" placeholder="Input Nama Produk">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label for="">Harga</label>
            <input type="number" name="Harga" class="form-control" placeholder="Input Harga">
          </div>
          <div class="col-sm-6"> 
            <label for="">Jenis Produk</label>
            <select name="Prodi Produk" class="form-control">
              <option value="">Pilih Produk</option> 
              <option value="">Alat tulis</option>
              <option value="">Elektronik</option>
              <option value="">Sembako</option>
            </select>
          </div>
          
        </div>
        <div class="row mt-2">
          <div class="col-sm-12">
          <button class="btn btn-success" style="width: 100%">Simpan</button>
          </div> 
        </div>
        </form>
      </div>
      </div>
      </div>
      
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
      </html>
</body>
</html> 