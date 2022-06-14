@extends('layouts.desain')

@section('content')
<div>
  <img class="img-fluid" src="https://via.placeholder.com/1920x400.png?text=Ukuran+Optimal+=+1920px+x+400px">
</div>
<div class="container">
  <div class="m-4">

    <div style="height:4px; background-color: rgb(0, 0, 0);"> </div>
    <div class="container">
      <div class="m-4 mb-4 text-center">
        <h1><strong>APA DEFINISI DARI KUBE?</strong></h1>
      </div>
      <div class="container mb-3">
        @foreach ($kube as $kop)
        <div class="mt-2" style="text-indent: 25px;">
          <?= $kop->informasi ?>
        </div>
        <div>
          <img class="img-fluid d-flex mx-auto" src="{{ asset('kubeProd/'.$kop->foto_syarat)}}" alt="" srcset="">
        </div>
        <hr>
        <div>
          <img class="img-fluid d-flex mx-auto" src="{{ asset('kubeProd/'.$kop->foto_alur)}}" alt="" srcset="">
        </div>
        @endforeach
      </div>
      <div class="mb-5">
        <h1>Daftar Sentra KUBE</h1>
        <div class="row row-cols-3 g-5">
          @foreach($picts as $pict)
          <img id="bKota" style="cursor: pointer;" class="col" src="{{asset('UMKMProd/'.$pict->kota)}}" alt="" srcset="">
          <img id="bPesantren" style="cursor: pointer;" class="col" src="{{asset('UMKMProd/'.$pict->pesantren)}}" alt="" srcset="">
          <img id="bMojoroto" style="cursor: pointer;" class="col" src="{{asset('UMKMProd/'.$pict->mojoroto)}}" alt="" srcset="">
          @endforeach
        </div>
      </div>

      <div id="kota">
        <h1>Kec. Kota</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          @foreach ($kotas as $kota)
          <div class="col">
            <div class="card">
              <h3 class="card-header">{{$kota->judul}}</h3>
              <img src="{{asset('koperasidaftarProd/'.$kota->foto)}}" class="" alt="..." />
              <div class="card-body">
                <dl class="row my-0">
                  <dt class="col-sm-5">Kelurahan</dt>
                  <dd class="col-sm-7 my-0">: {{$kota->kelurahan}}</dd>
                  <dt class="col-sm-5">Jenis</dt>
                  <dd class="col-sm-7 my-0">: {{$kota->jenis}}</dd>
                  <dt class="col-sm-5">Thn Berdiri</dt>
                  <dd class="col-sm-7 my-0">: {{$kota->tahun}}</dd>
                  <dt class="col-sm-5">Contact</dt>
                  <dd class="col-sm-7 my-0">: {{$kota->contact}}</dd>
                  <dt class="col-sm-5">Alamat:</dt>
                  <dd class="col-sm-7 my-0">: {{$kota->alamat}}</dd>
                </dl>
              </div>
            </div>
          </div>
          @endforeach
          <div class="d-flex justify-content-end w-100 my-3">
            {{ $kotas->links() }}
          </div>
        </div>
      </div>
  
      <div id="pesantren">
        <h1>Kec. Pesantren</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          @foreach ($pesantrens as $pesantren)
          <div class="col">
            <div class="card">
              <h3 class="card-header">{{$pesantren->judul}}</h3>
              <img src="{{asset('koperasidaftarProd/'.$pesantren->foto)}}" class="" alt="..." />
              <div class="card-body">
                <dl class="row my-0">
                  <dt class="col-sm-5">Kelurahan</dt>
                  <dd class="col-sm-7 my-0">: {{$pesantren->kelurahan}}</dd>
                  <dt class="col-sm-5">Jenis</dt>
                  <dd class="col-sm-7 my-0">: {{$pesantren->jenis}}</dd>
                  <dt class="col-sm-5">Thn Berdiri</dt>
                  <dd class="col-sm-7 my-0">: {{$pesantren->tahun}}</dd>
                  <dt class="col-sm-5">Contact</dt>
                  <dd class="col-sm-7 my-0">: {{$pesantren->contact}}</dd>
                  <dt class="col-sm-5">Alamat:</dt>
                  <dd class="col-sm-7 my-0">: {{$pesantren->alamat}}</dd>
                </dl>
              </div>
            </div>
          </div>
          @endforeach
          <div class="d-flex justify-content-end w-100 my-3">
            {{ $pesantrens->links() }}
          </div>
        </div>
      </div>
  
      <div id="mojoroto">
        <h1>Kec. Mojoroto</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          @foreach ($mojorotos as $mojoroto)
          <div class="col">
            <div class="card">
              <h3 class="card-header">{{$mojoroto->judul}}</h3>
              <img src="{{asset('koperasidaftarProd/'.$mojoroto->foto)}}" class="" alt="..." />
              <div class="card-body">
                <dl class="row my-0">
                  <dt class="col-sm-5">Kelurahan</dt>
                  <dd class="col-sm-7 my-0">: {{$mojoroto->kelurahan}}</dd>
                  <dt class="col-sm-5">Jenis</dt>
                  <dd class="col-sm-7 my-0">: {{$mojoroto->jenis}}</dd>
                  <dt class="col-sm-5">Thn Berdiri</dt>
                  <dd class="col-sm-7 my-0">: {{$mojoroto->tahun}}</dd>
                  <dt class="col-sm-5">Contact</dt>
                  <dd class="col-sm-7 my-0">: {{$mojoroto->contact}}</dd>
                  <dt class="col-sm-5">Alamat:</dt>
                  <dd class="col-sm-7 my-0">: {{$mojoroto->alamat}}</dd>
                </dl>
              </div>
            </div>
          </div>
          @endforeach
          <div class="d-flex justify-content-end w-100 my-3">
            {{ $mojorotos->links() }}
          </div>
        </div>
      </div>
  
    </div>
  </div>
  @endsection
  
  @section('scripts')
  <script>
    $("#kota").hide();
    $("#pesantren").hide();
    $("#mojoroto").hide();
  
    $("#bKota").click(function() {
      $("#kota").toggle();
      $("#pesantren").hide();
      $("#mojoroto").hide();
      localStorage.setItem("kecamatan", "#bKota")
    });
  
    $("#bPesantren").click(function() {
      $("#pesantren").toggle();
      $("#kota").hide();
      $("#mojoroto").hide();
      localStorage.setItem("kecamatan", "#bPesantren")
    });
  
    $("#bMojoroto").click(function() {
      $("#mojoroto").toggle();
      $("#pesantren").hide();
      $("#kota").hide();
      localStorage.setItem("kecamatan", "#bMojoroto")
    });
  </script>
  
  <script>
    if (localStorage.getItem("pagination") == "true") {
      $(localStorage.getItem("kecamatan")).trigger('click')
      localStorage.setItem("pagination", "false")
    }
  </script>
  
  <script>
    $(function() {
    $("#pagination").click(function(e) {
      if (e.target.class == "page-link" || $(e.target).parents("#pagination").length) {
        localStorage.setItem("pagination", "true")
      }
    });
  })
  </script>
  @endsection