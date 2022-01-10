<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Import & Export CSV in Laravel 8</title>
  </head>
  <body>
   <div class="container my-5">
       <h1 class="fs-5 fw-bold text-center">Import & Export CSV in Laravel 8</h1>
       <div class="row">
           <div class="d-flex my-2">
               <a href="export-csv" target="_blank" class="btn btn-primary me-1">Export CSV</a>
               <a href="export-csv" target="_blank" class="btn btn-primary me-1">Export XLSX</a>
           </div>
           @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
           @endif
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Nama Pemilik Rekening</th>
                    <th scope="col">Nomor Rekening</th>
                    <th scope="col">Jumlah Uang</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data_pegawais as $key => $item)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $item->nama_supplier }}</td>
                        <td>{{ $item->nmrek }}</td>
                        <td>{{ $item->rekening }}</td>
                        <td>
                            <input id="bersih" name="bersih" type="numeric" class="form-control" placeholder="bersih" aria-label="bersih" aria-describedby="basic-addon1">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{-- Halaman : {{ $pegawais->currentPage() }} <br/>
	        Jumlah Data : {{ $pegawais->total() }} <br/>
	        Data Per Halaman : {{ $pegawais->perPage() }} <br/> --}}
	        {{-- {{ $pegawais->links() }} --}}
       </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>