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
                        <br>
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="information-circle-sharp"></ion-icon>  #{{$home->id}}</div></p>
                        <br>
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="location-sharp"></ion-icon>     {{$home->local}} </div></p>
                        <br>
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="cash-sharp"></ion-icon>     R$ {{$home->valor}} </div></p>
                        <br>
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="bed-sharp"></ion-icon> {{$home->quarto}} Quartos</div></p>
                        <br>
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="man-sharp"></ion-icon> {{$home->banheiro}} Banheiros</div></p>
                        <br>
                        <p><div class="d-flex flex-row align-items-center"><ion-icon name="at-circle-sharp"></ion-icon> comercial@imob.com.br</div></p>
                </div>
            </div>
        </div>
            
    </div>

@endsection