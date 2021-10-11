@extends('layouts.main')

@section('container')
    <h1>My Profil</h1>
    <h3>{{ auth()->user()->name  }}</h3>
    <h4>{{ auth()->user()->username }}</h4>
@endsection