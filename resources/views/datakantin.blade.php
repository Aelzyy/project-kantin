
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Canteen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Kantin</h1>

    <div class="container">
        <a href="/tambahdatakantin" class="btn btn-success">Tambah Data</a>
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message}}
          </div>
          @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">NoTelepon</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $no= 1;
                  @endphp
                  @foreach ($data as $row)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{$row->nama}}</td>
                    <td>
                      <img src="{{asset('fotokantin/'.$row->foto)}}" alt="" style="width: 40px;">
                    </td>
                    <td>{{$row->jeniskelamin}}</td>
                    <td>0{{$row->notelpon}}</td>
                    <td>{{  $row->created_at}}</td>
                    <td>
                        <a href="/tampildatakantin/{{$row->id}}" class="btn btn-info">Edit</button>
                        <a href="/deletedatakantin/{{$row->id}}" class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  </body>
</html>