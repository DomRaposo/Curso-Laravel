@extends('site.layout')

@section('title','Essa é a pag HOME')


@section('conteudo')
<h1> Essa é nossa home. </h1>

{{-- estrutura de repetição --}}

@php
    $i = 0;
@endphp

@while ($i<=10);
Valor atual é {{ $i }}<br>
@php $i++ @endphp
@endwhile



