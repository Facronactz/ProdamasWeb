@extends('layouts.desain')

@section('content')
<div>
  <img class="img-fluid" src="https://via.placeholder.com/1920x400.png?text=Ukuran+Optimal+=+1920px+x+400px">
</div>
<div class="container">
  <div class="m-4">

    <div class="mb-5">
      <h1>Daftar Sentra UMKM</h1>
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
            <img src="{{asset('UMKMProd/'.$kota->foto)}}" class="" alt="..." />
            <div class="card-body">
              <dl class="row my-0">
                <dt class="col-sm-5">Kelurahan</dt>
                <dd class="col-sm-7 my-0">: {{$kota->kelurahan}}</dd>
                <dt class="col-sm-5">jenis</dt>
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
        <div id="kotaslink" class="d-flex justify-content-end w-100 my-3">
          {{ $kotas->links() }}
        </div>
      </div>
    </div>

    <div id="pesantren">
      <h1>Kec. Pesantren</h1>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card">
            <h3 class="card-header">UMKM Melati</h3>
            <img src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90" class="" alt="..." />
            <div class="card-body">
              <dl class="row my-0">
                <dt class="col-sm-5">Kelurahan</dt>
                <dd class="col-sm-7 my-0">: Bandar</dd>
                <dt class="col-sm-5">jenis</dt>
                <dd class="col-sm-7 my-0">: Pangan</dd>
                <dt class="col-sm-5">Thn Berdiri</dt>
                <dd class="col-sm-7 my-0">: 2009</dd>
                <dt class="col-sm-5">Contact</dt>
                <dd class="col-sm-7 my-0">: 08123123123</dd>
                <dt class="col-sm-5">Alamat:</dt>
                <dd class="col-sm-7 my-0">: JL. BLABLA NO 54 GG 4 RT 2 RW 5</dd>
              </dl>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <h3 class="card-header">UMKM Melati</h3>
            <img src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90" class="" alt="..." />
            <div class="card-body">
              <dl class="row my-0">
                <dt class="col-sm-5">Kelurahan</dt>
                <dd class="col-sm-7 my-0">: Bandar</dd>
                <dt class="col-sm-5">jenis</dt>
                <dd class="col-sm-7 my-0">: Pangan</dd>
                <dt class="col-sm-5">Thn Berdiri</dt>
                <dd class="col-sm-7 my-0">: 2009</dd>
                <dt class="col-sm-5">Contact</dt>
                <dd class="col-sm-7 my-0">: 08123123123</dd>
                <dt class="col-sm-5">Alamat:</dt>
                <dd class="col-sm-7 my-0">: JL. BLABLA NO 54 GG 4 RT 2 RW 5</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <h3 class="card-header">UMKM Melati</h3>
            <img src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90" class="" alt="..." />
            <div class="card-body">
              <dl class="row my-0">
                <dt class="col-sm-5">Kelurahan</dt>
                <dd class="col-sm-7 my-0">: Bandar</dd>
                <dt class="col-sm-5">jenis</dt>
                <dd class="col-sm-7 my-0">: Pangan</dd>
                <dt class="col-sm-5">Thn Berdiri</dt>
                <dd class="col-sm-7 my-0">: 2009</dd>
                <dt class="col-sm-5">Contact</dt>
                <dd class="col-sm-7 my-0">: 08123123123</dd>
                <dt class="col-sm-5">Alamat:</dt>
                <dd class="col-sm-7 my-0">: JL. BLABLA NO 54 GG 4 RT 2 RW 5</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="mojoroto">
      <h1>Kec. Mojoroto</h1>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card">
            <h3 class="card-header">UMKM Pondok</h3>
            <img src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90" class="" alt="..." />
            <div class="card-body">
              <dl class="row my-0">
                <dt class="col-sm-5">Kelurahan</dt>
                <dd class="col-sm-7 my-0">: Bandar</dd>
                <dt class="col-sm-5">jenis</dt>
                <dd class="col-sm-7 my-0">: Pangan</dd>
                <dt class="col-sm-5">Thn Berdiri</dt>
                <dd class="col-sm-7 my-0">: 2009</dd>
                <dt class="col-sm-5">Contact</dt>
                <dd class="col-sm-7 my-0">: 08123123123</dd>
                <dt class="col-sm-5">Alamat:</dt>
                <dd class="col-sm-7 my-0">: JL. BLABLA NO 54 GG 4 RT 2 RW 5</dd>
              </dl>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <h3 class="card-header">UMKM Pondok</h3>
            <img src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90" class="" alt="..." />
            <div class="card-body">
              <dl class="row my-0">
                <dt class="col-sm-5">Kelurahan</dt>
                <dd class="col-sm-7 my-0">: Bandar</dd>
                <dt class="col-sm-5">jenis</dt>
                <dd class="col-sm-7 my-0">: Pangan</dd>
                <dt class="col-sm-5">Thn Berdiri</dt>
                <dd class="col-sm-7 my-0">: 2009</dd>
                <dt class="col-sm-5">Contact</dt>
                <dd class="col-sm-7 my-0">: 08123123123</dd>
                <dt class="col-sm-5">Alamat:</dt>
                <dd class="col-sm-7 my-0">: JL. BLABLA NO 54 GG 4 RT 2 RW 5</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <h3 class="card-header">UMKM Pondok</h3>
            <img src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90" class="" alt="..." />
            <div class="card-body">
              <dl class="row my-0">
                <dt class="col-sm-5">Kelurahan</dt>
                <dd class="col-sm-7 my-0">: Bandar</dd>
                <dt class="col-sm-5">jenis</dt>
                <dd class="col-sm-7 my-0">: Pangan</dd>
                <dt class="col-sm-5">Thn Berdiri</dt>
                <dd class="col-sm-7 my-0">: 2009</dd>
                <dt class="col-sm-5">Contact</dt>
                <dd class="col-sm-7 my-0">: 08123123123</dd>
                <dt class="col-sm-5">Alamat:</dt>
                <dd class="col-sm-7 my-0">: JL. BLABLA NO 54 GG 4 RT 2 RW 5</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@section('scripts')
<script>
  if (window.location.href === 'https://prodamas.kedirikota.go.id/umkm') {
    $("#kota").hide();
    $("#pesantren").hide();
    $("#mojoroto").hide();
  }

  $("#bKota").click(function() {
    $("#kota").toggle();
    $("#pesantren").hide();
    $("#mojoroto").hide();
  });

  $("#bPesantren").click(function() {
    $("#pesantren").toggle();
    $("#kota").hide();
    $("#mojoroto").hide();
  });

  $("#bMojoroto").click(function() {
    $("#mojoroto").toggle();
    $("#pesantren").hide();
    $("#kota").hide();
  });

  $("#kotaslink").click(function() {
    $("#kota").toggle();
    $("#pesantren").hide();
    $("#mojoroto").hide();
  });
</script>
@endsection