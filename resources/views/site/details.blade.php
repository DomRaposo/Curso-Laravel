@extends('site.layout')
@section('title','Detalhes')
@section('conteudo')


<div class="container center" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="col s12 m4">
        <img src="{{ $produto->imagem }}" class="responsive-img" style="max-width: 300px; margin-bottom: 10px;">
        <h1 style="margin-top: 10px;">{{ $produto->nome }}</h1>
        <p>{{ $produto->descricao }}</p>
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>
@endsection
