@extends('blog.layout')

@section('title', 'Users')

@section('body')

    @foreach ($users as $u)
    <hr>
        <p>Nama : {{ $u->name }}</p>
        <p>Email : {{$u->email }}</p>
        <p>Nomer : {{$u->phone['user_id'] }}</p>
        <p>Merk Hp : {{ $u->smartphone }}</p>
    @endforeach
    
@endsection

