@extends('layouts.desain')
@section('data', 'active')
@section('progressio', 'active')
@section('title', 'Progressio')

@section('content')
    <iframe src="https://prodamasplus.kedirikota.go.id/auth/login" style="border: none;width: 90%;height: 90vh;" class="mx-auto d-flex"></iframe>
@endsection

@section('scripts')

    {{-- <script type="text/javascript">
        document.getElementById("logingoogle").href = "https://prodamasplus.kedirikota.go.id/auth/login_google";
    </script> --}}
    <script type="text/javascript">
        document.getElementById("logingoogle").onclick = function() {
        //   document.getElementById("logingoogle").href="https://prodamasplus.kedirikota.go.id/auth/login_google";
          window.open("https://prodamasplus.kedirikota.go.id/auth/login_google", '_blank').focus(); 
          return true;
        };
      </script>

@endsection
