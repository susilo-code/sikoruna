      @extends('layouts.app')
      @section('content')
      <h3><i class="fa fa-pencil me-2"></i>INPUT DATA BUKU</h3>
      <hr style="border:1px solid grey"><br><br>
      <div class="panel panel-default w-75 mx-auto  bg-dark p-5 rounded-5">
        <div class="my-auto">
          <div class="input-group mb-3 mt-3 w-75 mx-auto">
            <label class="input-group-text" for="inputGroupSelect02">Judul Buku</label>
            <input class="form-control "  ></div>
            <div class="input-group mb-3 w-75 mx-auto">
              <label class="input-group-text" for="inputGroupSelect02">Nama Penulis</label>
              <input class="form-control "  ></div>
              <div class="input-group mb-3 w-75 mx-auto ">
                <label class="input-group-text" for="inputGroupSelect02">Jenis Buku</label>
                <select class="form-select" id="inputGroupSelect02">
                  <option selected>Jenis Buku...</option>
                  <option value="1">Fiksi</option>
                  <option value="2">Non-Fiksi</option>
                </select>
              </div>
              <div class="input-group mb-3 w-75 mx-auto">
                <label class="input-group-text" for="inputGroupSelect02">Harga</label>
                <input class="form-control"  id="inputAngka"></div>
                <div class="input-group mb-4 w-75 mx-auto ">
                <label class="input-group-text" for="inputGroupSelect02">Tahun Beli</label>
                <select class="form-select" id="inputGroupSelect02">
                  <option selected>Tahun</option>
                  <option value="1">2024</option>
                  <option value="2">2023</option>
                  <option value="1">2022</option>
                  <option value="2">2021</option>
                  <option value="1">2020</option>
                  <option value="2">2019</option>
                  <option value="1">2018</option>
                  <option value="2">2017</option>
                  <option value="1">2016</option>
                  <option value="2">2015</option>
                </select>
              </div>
                <div class="d-grid">
    <button type="submit" class="btn btn-primary mx-auto"><i class="fa fa-save me-2"></i>Simpan Data</button>
  </div>
              </div>
              </div>

              <script src="../js/bootstrap.bundle.min.js" ></script>
              <script src="../js/admin.js" ></script>
              <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('#inputAngka').on('keyup',function(){
        var angka = $(this).val();
 
        var hasilAngka = formatRibuan(angka);
 
        $(this).val(hasilAngka);
    });
 
    function formatRibuan(angka){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split           = number_string.split(','),
        sisa            = split[0].length % 3,
        angka_hasil     = split[0].substr(0, sisa),
        ribuan          = split[0].substr(sisa).match(/\d{3}/gi);
 
 
 
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            angka_hasil += separator + ribuan.join('.');
        }
 
        angka_hasil = split[1] != undefined ? angka_hasil + ',' + split[1] : angka_hasil;
        return angka_hasil;
    }
</script>

              <script type="text/javascript">
    $('#inputAngka').on('keyup',function(){
        var angka = $(this).val();
 
        var hasilAngka = formatRibuan(angka);
 
        $(this).val(hasilAngka);
    });
 
    function formatRibuan(angka){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split           = number_string.split(','),
        sisa            = split[0].length % 3,
        angka_hasil     = split[0].substr(0, sisa),
        ribuan          = split[0].substr(sisa).match(/\d{3}/gi);
 
 
 
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            angka_hasil += separator + ribuan.join('.');
        }
 
        angka_hasil = split[1] != undefined ? angka_hasil + ',' + split[1] : angka_hasil;
        return 'Rp. ' + angka_hasil;
    }
</script>
              @endsection

              <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  -->
</body>
</html>