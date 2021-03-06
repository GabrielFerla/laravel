
@extends('layouts.main')

@section('title', 'Hdc Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="get">
        <input type="text" name="search" id="search" class='form-control' placeholder="procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por {{$search}}</h2>
 
    @else
    <h2>Proximos Eventos</h2>
    @endif
    <p class='subtitle'>Veja os eventos dos proximos dias</p>
    <div id="cards-container" class='row'>
        @foreach($events as $event)
        <div class="card col-md-3">
            
            <img src="/img/events/{{$event->image}}" alt="{{ $event->title}}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y',strtotime($event->date)) }}</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">x Participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Nenhum evento encontrado com nome {{$search}}</p><a href='/'> Ver Todos</a>
        @elseif(count($events) == 0)
            <p>Nenhum evento encontrado</p>
        @endif
    </div>
</div>

@endsection   