@extends('site.layout')

@section('title','Essa é a pag HOME')


@section('conteudo')
<h1> Essa é nossa home. </h1>

{{-- estrutura de repetição --}}

@forelse ($frutas as $fruta)
{{ $fruta }}<br>
@empty
    Array está vazia.
@endforelse



