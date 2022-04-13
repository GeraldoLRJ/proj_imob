@extends('layouts.main')
@section('title', 'Imob')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Localize um Imóvel</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Localiza...">
    </form>
</div>
<div id="homes-container" class="col-md-12">
    <br>
    @if($search)
    <h2>Buando por: {{$search}}</h2>
    @else
    <h2>Outros Imóveis</h2>
    @endif
    <div id="cards-container">
        @foreach($homes as $home)
            <div class="card">
                <div class="img" style="background-image: url({{$home->image}});"></div>                
                <div class="card-body">
                <h5 class="card-title">{{$home->tipoimovel}} PARA {{$home->tipolocacao}}</h5>
                <h5><ion-icon name="bed-sharp"></ion-icon> Quartos: {{$home->quarto}} <br> <ion-icon name="man-sharp"></ion-icon> Banheiros: {{$home->banheiro}}</h5>
                <a href="/homes/{{$home->id}}" class="btn btn-primary">Veja sobre</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection