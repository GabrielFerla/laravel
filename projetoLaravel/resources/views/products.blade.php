@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

@if($busca != '')
<h1>{{$busca}}</h1>
@endif
<h1>Lista de produtos</h1>

@endsection