<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Canteen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Kategori Minuman</h1>

    <div class="container">
        <a href="" class="btn btn-success">Tambah Data</a>
        <div class="row">
          <!-- @if ($message = Session::get('success')) -->
          <div class="alert alert-success" role="alert">
            <!-- {{ $message}} -->
          </div>
          <!-- @endif -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
              </table>
        </div>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  </body>
</html>