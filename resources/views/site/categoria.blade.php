@extends('site.layout')

@section('title','Essa é a pag HOME')
@section('conteudo')

<div class="row container" style="margin-top: 40px">

    <h5>Categoria: {{ $categoria->nome }} </h5>

    @foreach ($produtos as $produto)
    <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ $produto->imagem }}">

            <a href="{{ route('site.details',$produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
          </div>
          <div class="card-content">
            <h4>"{{$produto->nome}}" </h4>
            <h5> R$ {{ number_format($produto->preco, 2, ',', '.') }}</h5>
            <p>{{ Str::limit($produto->descricao,20 ) }}</p>
          </div>
        </div>
      </div>

    @endforeach
</div>


<div class="row center">
    {{ $produtos->links('costum.pagination') }}
  </div>

@endsection
