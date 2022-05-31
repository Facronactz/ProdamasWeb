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
        document.getElementById("logingoogle").onclick = setTimeout(function() {
            //   document.getElementById("logingoogle").href="https://prodamasplus.kedirikota.go.id/auth/login_google";
            //   window.open("https://prodamasplus.kedirikota.go.id/auth/login_google", '_blank').focus();
            window.open("https://prodamasplus.kedirikota.go.id/auth/login_google", 'newwindow', 'width=500,height=500');
            return true;
        }, 5000);
    </script>

    {{-- <script type="text/javascript">
        function addEvent(element, evnt, funct) {
            if (element.attachEvent)
                return element.attachEvent('on' + evnt, funct);
            else
                return element.addEventListener(evnt, funct, false);
        }

        // example
        addEvent(
            document.getElementById('logingoogle'),
            'click',
            function() {
                window.open("https://prodamasplus.kedirikota.go.id/auth/login_google", 'newwindow', 'width=500,height=500');
            }
        );
    </script> --}}

@endsection
