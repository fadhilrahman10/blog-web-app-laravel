@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="/images/{{ $profile }}" alt="profile" class="rounded-circle img-thumbnail">
@endsection


