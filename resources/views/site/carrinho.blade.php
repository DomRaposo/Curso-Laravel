@extends('site.layout')

@section('title','Carrinho')
@section('conteudo')

<div class="row container" style="margin-top: 40px">

    @if ($mensagem = Session::get('sucesso'))


    <div class="card green">
        <div class="card-content white-text">
          <span class="card-title">Feito!</span>
          <p>{{ $mensagem }}</p>
        </div>

        </div>

    @endif

    @if ($mensagem = Session::get('aviso'))


    <div class="card blue">
        <div class="card-content white-text">
          <span class="card-title">Tudo bem!</span>
          <p>{{ $mensagem }}</p>
        </div>

        </div>

    @endif

    @if($itens->count() == 0)

    <div class="card orange">
        <div class="card-content white-text">
          <span class="card-title">Seu carrinho está vazio!</span>
          <p>Aproveite nossas Ofertas</p>
        </div>

        </div>

    @else

    <h5>Seu Carrinho Possui {{ $itens->count() }} produtos. </h5>



    <table class="striped">

        <thead>
          <tr>
              <th></th>
              <th>nome</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
        @foreach ($itens as $item)
          <tr>
            <td><img src="{{ $item->attributes->image }}" alt="" width="70" class="responsive-img circle"></td>
            <td>{{ $item->name }}</td>
            <td>R$ {{ number_format($item->price, 2, ',', '.') }}</td>

            {{-- BTN ATUALIZAR --}}
            <form action="{{ route('site.atualizacarrinho') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
            <td><input style="width:40px; font-weigh:900; " min="1" type="number" name="quantity" value="{{ $item->quantity }}"></td>
            <td>
                  <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
            </form>

            {{-- BTN DELETAR --}}
                  <form action="{{ route('site.removecarrinho') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                  <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                </form>


                </td>
          </tr>
        @endforeach
        </tbody>
      </table>

      <h5>Valor Total: R$ {{ number_format(\Cart::getTotal(), 2, ',', '.') }}</h5>


    @endif



      <div class="row container center" style=" margin-top:20px;">

        <a href="{{ route('site.index') }}" class="btn waves-effect waves-light blue" style="width:400px; ">Continuar Comparando<i class="material-icons right">arrow_pack</i></a>

        <a href="{{ route('site.limparcarrinho') }}" class="btn waves-effect waves-light blue">Limpar Carrinho<i class="material-icons right">clear</i></a>

        {{-- Formulário para Finalizar Pedido --}}
    <form action="{{ route('site.finalizarpedido') }}" method="POST" style="margin-top: 20px;">

        @csrf
        <input hidden name="itens" value="{{ $itens }}"> {{-- Enviando os itens do carrinho --}}

        <button type="submit" class="btn waves-effect waves-light green">
            Finalizar Pedido<i class="material-icons">check</i>
        </button>

    </form>


      </div>

</div>




@endsection
