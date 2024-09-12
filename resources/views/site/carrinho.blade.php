@extends('site.layout')

@section('title','Carrinho')
@section('conteudo')

<div class="row container" style="margin-top: 40px">

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
            <td><input style="width:40px; font-weigh:900; " type="number" name="quantity" value="{{ $item->quantity }}"></td>
            <td>
                  <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                  <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>

                </td>
          </tr>
        @endforeach
        </tbody>
      </table>

      <div class="row container center" style=" margin-top:20px;">
        <button class="btn waves-effect waves-light blue" style="width:400px; ">Continuar Comparando<i class="material-icons right">arrow_pack</i></button>
        <button class="btn waves-effect waves-light blue">Limpar Carrinho<i class="material-icons right">clear</i></button>
        <button class="btn waves-effect waves-light green " style="margin-top: 20px" >Finalizar Pedido<i class="material-icons">check</i></button>

      </div>

</div>




@endsection
