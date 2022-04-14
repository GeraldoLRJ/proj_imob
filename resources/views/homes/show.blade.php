@extends('layouts.main')
@section('title', $home->id)
@section('content')

    <div class="col-md-10 ofsset-md-1">
        <div class="imoveis">
            <div class="row justify-content-center">
                <div id="image-container" class="col-md-6">
                    <img src="{{$home->image}}" class="img-fluid" alt="">
                </div>
                <div id="info-container" class="col-md-6">
                    <h1><strong>Sobre o Imóvel:</strong></h1>
                        
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="information-circle-sharp"></ion-icon>  #{{$home->id}}</div></p>
                        
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="location-sharp"></ion-icon>     {{$home->local}} </div></p>
                        
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="cash-sharp"></ion-icon>     R$ {{$home->valor}} </div></p>
                        
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="bed-sharp"></ion-icon> {{$home->quarto}} Quartos</div></p>
                        
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="man-sharp"></ion-icon> {{$home->banheiro}} Banheiros</div></p>
                        
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="at-circle-sharp"></ion-icon> comercial@imob.com.br</div></p>
                        <br>
                        @auth
                        <a href="/homes/edit/{{$home->id}}" class="btn btn-info edit-btn"> <ion-icon name="create-outline"></ion-icon> Editar</a>
                        <form action= "/homes/{{$home->id}}"method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-delete"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>
                        @endauth
                </div>
            </div>
        </div>
            
    </div>

@endsection