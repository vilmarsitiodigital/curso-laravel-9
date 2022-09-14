@extends('layouts.app')

@section('title', 'Listagem de usuários')

@section('content')
    <h1>
        Listagem dos usuários <a href="{{route('users.create')}}">Novo</a>
    </h1>

    <ul>
        @foreach ($users as $user)
        <li>{{$user->name}} - {{$user->email}} | <a href="{{route('users.show',['id'=>$user->id])}}">Detalhes</a></li>
        @endforeach
    </ul>
@endsection
