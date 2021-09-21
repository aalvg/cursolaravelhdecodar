@extends('layouts.main')

@section('title','HDC Events')

@section('content')
    



<h1>Algum Titulo</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10>15)
    <p>A condição é verdadeira</p>
@endif

<p>{{$nome}}</p>

@if($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif($nome == "Matheus")

<p>O nome é {{$nome}} e ele tem {{$idade2}} anos, e trabalha</p>
@endif
@endsection