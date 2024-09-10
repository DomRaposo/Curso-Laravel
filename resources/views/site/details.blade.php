@extends('site.layout')
@section('title','Detalhes')
@section('conteudo')


<div class="container center" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="mt-4" style='width: 5px heigth:50px '>
        <img src="{{ $produto->imagem }}" class="responsive-img" style="max-width: 300px; margin-bottom: 10px;">
        <h1 >{{ $produto->nome }}</h1>
        <p>{{ $produto->descricao }}</p>
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>
@endsection
