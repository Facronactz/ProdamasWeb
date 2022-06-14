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
            <div class="mt-2" style="text-indent: 25px;">
                @foreach ($kube as $kop)
                <?= $kop->informasi ?>
                {{ asset('kubeProd/').$kop->foto_syarat }}
                @endforeach
            </div>
            <div>
                <img class="img-fluid d-flex mx-auto" src="https://via.placeholder.com/1000x300.png?text=Syarat+Pembentukan" alt="" srcset="">
            </div>
            <hr>
            <div>
                <img class="img-fluid d-flex mx-auto" src="https://via.placeholder.com/1000x300.png?text=Alur+Pembentukan" alt="" srcset="">
            </div>
            
        </div>
        <div class="mb-5">
            <h1>Daftar Sentra KUBE</h1>
            <div class="row row-cols-3 g-5">
              <img id="bKota" style="cursor: pointer;" class="col" src="https://via.placeholder.com/250x150.png?text=Kec.+Kota" alt="" srcset="">
              <img id="bPesantren" style="cursor: pointer;" class="col" src="https://via.placeholder.com/250x150.png?text=Kec.+Pesantren" alt="" srcset="">
              <img id="bMojoroto" style="cursor: pointer;" class="col" src="https://via.placeholder.com/250x150.png?text=Kec.+Mojoroto" alt="" srcset="">
            </div>
          </div>
          
          <div id="kota">
            <h1>Kec. Kota</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
              <div class="col">
                <div class="card">
                  <h3 class="card-header">KUBE Mawar</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
                  <h3 class="card-header">KUBE Mawar</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
                  <h3 class="card-header">KUBE Mawar</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
    
          <div id="pesantren">
            <h1>Kec. Pesantren</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
              <div class="col">
                <div class="card">
                  <h3 class="card-header">KUBE Melati</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
                  <h3 class="card-header">KUBE Melati</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
                  <h3 class="card-header">KUBE Melati</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
                  <h3 class="card-header">KUBE Pondok</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
                  <h3 class="card-header">KUBE Pondok</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
                  <h3 class="card-header">KUBE Pondok</h3>
                  <img
                    src="https://awsimages.detik.net.id/community/media/visual/2019/12/20/905dfd3e-6cfd-46ff-b464-e86baa80c305_43.jpeg?w=700&q=90"
                    class="" alt="..." />
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
      $("#kota").hide();
      $("#pesantren").hide();
      $("#mojoroto").hide();
    
    
      $("#bKota").click(function(){
        $("#kota").toggle();
        $("#pesantren").hide();
        $("#mojoroto").hide();
      });
    
      $("#bPesantren").click(function(){
        $("#pesantren").toggle();
        $("#kota").hide();
        $("#mojoroto").hide();
      });
    
      $("#bMojoroto").click(function(){
        $("#mojoroto").toggle();
        $("#pesantren").hide();
        $("#kota").hide();
      });
    </script>
    @endsection

        