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

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush

