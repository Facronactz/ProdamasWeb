@extends('admin.master')

@section('title')
    Detail Submission
@endsection

@section('content')
    <h2>{{$submission->topic}}</h2>
    <h6 class="text-bold">Written by {{$submission->name}}</h6>
    <p>{{$submission->article}}</p>
@endsection