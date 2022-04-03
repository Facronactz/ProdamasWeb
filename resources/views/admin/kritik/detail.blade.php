@extends('admin.master')

@section('kritik', 'active')

@section('title')
    Detail Kritik
@endsection

@section('content')

    <form action="/admin/kritik/{{$kritik->id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <h2>Pesan dari Sobat Ndamas</h2> <br>

        Hello Admin! {{ $kritik->name }} memberi kritik dan sarannya terkait Prodamas.<br><br>
        Berikut detail pengirim kritik dan saran :  <br>
        <table>
            <tr>
                <td>Nama</td>
                <td>: {{ $kritik->name }} </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>: {{ $kritik->phone }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: {{ $kritik->email }}</td>
            </tr>
        </table>
        <br>
            Berikut adalah saran yang diberikan oleh {{$kritik->name}} :
        <table>
            <tr>
                <td>"{{ $kritik->message }}"</td>
            </tr>
        </table>
        <br>
        Sekian, atas perhatiannya terimakasih.<br>
        #KolaborasiMembangunKediri #BeresBersamaProdamas</br>
        <br><a href="/admin/list-kritik" class="btn btn-outline-primary">Back</a>
    </form>
@endsection