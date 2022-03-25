@extends('layouts.main')
@section('title', 'Imob')
@section('content')
        
        <h1>TESTEEEE</h1>
        @if(0<1)
            <p>Está correto</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome =! "Tarcisio")
            <p>Seu nome eh : Tarcisio</p>

        @elseif($nome == "Geraldo")
            
            <p>Seu nome eh : {{$nome}} e você tem {{$idade}} anos</p>
        
        @else
            <p>Seu não nome eh : Tarcisio</p>
        @endif

        @for($i = 0; $i < count($vetor); $i++)
            
            <p>{{$vetor[$i]}}</p>

        @endfor
@endsection