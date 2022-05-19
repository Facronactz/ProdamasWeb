@extends('layouts.desain')
@section('foto', 'active')
@section('media', 'active')


@section('content')

<body>
    <!-- corousel -->
    
    <div class="row row-cols-1 row-cols-md-3 mb-5 g-4 centerItms feedAudio">
        @forelse ($posts as $post)
        <div class=" card noBorder cardAudio">
            <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer{{$post->id}}">
                <img src="{{ asset('cover/'. $post->cover) }}" style="width: 100%; height: 270px; object-fit: cover; object-position: center" class="card-img-top d-flex justify-content" alt="foto-prodamas">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class=" tittleAudio" href="">
                            {{ $post->title }}
                        </p>
                    </h3>
                    {{ $post->created_at }}
                </div>
            </div>
        </div>

        @empty
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
        @endforelse
    </div>

    
    @foreach ($posts as $post)     
        {{-- Card Modal --}}
        <div class="modal fade" id="audioPlayer{{$post->id}}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="fotoLabel">{{ $post->title }}</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body mb-4">
                                <div id="carouselIndicators{{$post->id}}" class="carousel slide mb-4" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($post->image as $no => $image)
                                            @if ($no == 0)
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('images/'. $image->image)}}" class="d-block w-100" alt="...">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img src="{{ asset('images/'. $image->image)}}" class="d-block w-100" alt="...">
                                                </div>
                                            @endif 
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators{{$post->id}}" data-bs-slide="prev" >
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators{{$post->id}}" data-bs-slide="next" >
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                            <!-- </div> -->
                            
                            <h5>{{ $post->body }}</h5>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                </div>
            </div>
        </div>
        {{-- Akhir Card foto --}}
        @endforeach
        <div class="d-flex justify-content-end w-100 mb-4">
            {{ $posts->links() }}
        </div>
    <!-- corousel -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>  

@endsection
