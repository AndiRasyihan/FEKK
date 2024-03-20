<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Table Data</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- our css -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<nav class="bg-success">
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills fw-bold">
        <li class="nav-item active"><a href="/dashboard" class="nav-link text-white" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/tabel" class="nav-link text-white">Tabel Data</a></li>
        <li class="nav-item"><a href="/tambah" class="nav-link text-white">Tambah Data</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link text-white">FAQs</a></li> -->
        <li class="nav-item"><a href="/" class="nav-link text-danger">log out</a></li>
      </ul>
    </header>
  </div>
</nav>

<!-- crud -->
<div class="container">
    <h1 class="text-center mt-5 fw-bold">Table Data</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-info" role="alert">
    {{$message}}
    </div>
    @endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No. </th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>Rasyihan</td>
      <td>082259851481</td>
      <td>
        <img src="foto/1.jpg" alt="" style="width: 40px;">
      </td>
      <!-- <td>@mdo</td> -->
      <td>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
  
  </tbody>
</table>
</div>
<!-- end crud -->


<!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>