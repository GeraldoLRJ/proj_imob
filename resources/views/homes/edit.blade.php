@extends('layouts.main')
@section('title', 'Edição')
@section('content')

<div id="home-create-container" class="col-md-6 offset-md-3">
    <h1>Altere o Imóvel</h1>
    <form action="/homes/update/{{$home->id}}" method="POST" enctype="multpart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagens</label>
            <input type="text" name="image" id="image" class="from-control-file" placeholder="Imagem" value="{{$home->image}}">
           <br> <br><img src="{{$home->image}}" class="img-preview" alt=""> <br>
        </div>
        <div class="form-group">
            <label for="title">Tipo de Imóvel:</label>
            <select name="TipoImovel" id="TipoImovel" class="form-control" >
                <option value="CASA">Casa</option>
                <option value="APARTAMENTO">Apartamento</option>
                <option value="SITIO">Sitio</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Locação do Imóvel:</label>
            <select name="TipoLocacao" id="TipoLocacao" class="form-control">
                <option value="VENDA">Venda</option>
                <option value="ALUGUEL">Aluguel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Localização:</label>
            <input type="text" class="form-control" id="local" name="local" placeholder="Local" value="{{$home->local}}">
        </div>
        <div class="form-group">
            <label for="title">Valor:</label>
            <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" value="{{$home->valor}}">
        </div>
        <div class="form-group">
            <label for="title">Quartos:</label>
            <input type="text" class="form-control" id="quarto" name="quarto" placeholder="Quartos" value="{{$home->quarto}}">
        </div>
        <div class="form-group">
            <label for="title">Banheiros:</label>
            <input type="text" class="form-control" id="banheiro" name="banheiro" placeholder="Banheiros" value="{{$home->banheiro}}">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Alterar Imóvel">
        <br>
    </form>
</div>

@endsection