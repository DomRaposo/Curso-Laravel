@extends('site.layout')

@section('title','Essa é a pag HOME')
@section('conteudo')

@include('includes.mensagem',['titulo'=> 'Mensagem de sucesso'])

@component('components.sidebar')
    @slot('paragrafo')
        texto de teste SLOT
    @endslot
@endcomponent

@endsection


