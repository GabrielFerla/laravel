
@extends('layouts.main')

@section('title', 'Hdc Events')

@section('content')

<h1>Algum Título</h1>
@if(10 > 15)
    <p>10 é maior que 5</p>
@endif

@if($nome == 'Gabriel')
<p>o {{ $nome }} é lindo e tem {{$idade}} anos</p>
@else
<p>Não é Gabriel</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }}</p>
@endfor 

@endsection   