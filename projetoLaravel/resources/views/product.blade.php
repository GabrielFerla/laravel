@extends('layouts.main')

@section('title', 'Hdc Events')

@section('content')

@if($id != null)
<h1>{{$id}}</h1>
@endif
@endsection