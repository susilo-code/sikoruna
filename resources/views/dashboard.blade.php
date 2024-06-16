      @extends('layouts.app')
      @section('content')
      <!-- Optional JavaScript; choose one of the two! -->
      <h3><i class="fa fa-tachometer me-2"></i>DASHBOARD</h3>
      <hr style="border:1px solid grey">
      <div class="row cols-4">


        <div class="col col-3">

          <div class="card w-100 bg-light">
            <h5 class="card-header">Nilai Buku</h5>
            <div class="card-body">
              <h2 class="card-title">{{"Rp " . number_format($nilai,0,',','.')}}</h2>
              <a href="data" data-mdb-ripple-init class="btn btn-warning">More Info</a>
            </div>
          </div>
        </div>

        <div class="col col-3 ">
          <div class="card w-100 bg-light">
            <h5 class="card-header">Jumlah Buku</h5>
            <div class="card-body">
              <h2 class="card-title">{{$jumlah}}</h2>
              <a href="data" data-mdb-ripple-init class="btn btn-warning">More Info </a>
            </div>
          </div>
          </div>

        
          
        <div class="col col-3 ">
          <div class="card w-100 bg-light">
            <h5 class="card-header">Proses Dibaca</h5>
            <div class="card-body">
              <h2 class="card-title">{{$proses}}</h2>
              <a href="data" data-mdb-ripple-init class="btn btn-warning">More Info</a>
            </div>
          </div>
        </div>

          <div class="col col-3 ">
          <div class="card w-100 bg-light">
            <h5 class="card-header">Selesai Dibaca</h5>
            <div class="card-body">
              <h2 class="card-title">{{$selesai}}</h2>
              <a href="data" data-mdb-ripple-init class="btn btn-warning">More Info</a>
            </div>
          </div>
          </div>
        </div>
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="../js/bootstrap.bundle.min.js" ></script>
        <script src="../js/admin.js" ></script>
        @endsection
        <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  -->
</body>
</html>