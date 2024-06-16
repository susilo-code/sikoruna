<!doctype html>
<html lang="ar" >
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css"  >
  <link rel="stylesheet" href="/css/admin.css"  >
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"  > -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
<style>
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}


table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    

.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    
</style>
  <title>Dashboard</title>
</head>
<body>
  <nav class="navbar navbar-expand-md bg-info fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SIKORUNA</b></a>
    </div>
  </div>
</nav>

<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-2 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link text-white" href="dashboard"><i class="fa fa-tachometer me-2"></i>Dashboard</a><hr style="border: 2px solid white">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="create"><i class="fa fa-pencil me-2"></i>Input Data Buku</a><hr style="border: 2px solid white">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="data"><i class="fa fa-database me-2"></i>Daftar Buku</a><hr style="border: 2px solid white">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fa fa-gear me-2"></i>Pengaturan</a><hr style="border: 2px solid white">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fa fa-instagram me-2"></i>Tentang</a><hr style="border: 2px solid white">
      </li>
      <li class="nav-item" style="height:220px">
        <a class="nav-link text-white" style="display:inline-block;padding-top:210px">Developed by Susilo@2024</a>
      </li>
    </ul>
  </div>
  <div class="col-md-10 p-5 pt-4 bg-light">@yield('content')</div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="/js/bootstrap.bundle.min.js" ></script>
<script src="/js/admin.js" ></script>


<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  -->
</body>
</html>