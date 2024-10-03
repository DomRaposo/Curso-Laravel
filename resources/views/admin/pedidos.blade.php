<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>




    <div class="row">

        @foreach($pedidos as $pedido)
<div class="col-md-3 card mt-3 mb-3 m-3" style="width: 18rem;">
    <div class="card-header d-flex justify-content-between ">

        <h5 class="mb-0">Mesa: <span class="badge bg-primary 2x">{{ $num++ }}</span> </h5>
        <span class="badge bg-warning" >Pedido {{ $pedido->pedido_id }}</span>
    </div>
    <div class="card-body w-100">

        <p class="card-text">
            <strong><i class="bi bi-person-fill"></i> {{ $pedido->usuario_nome }}</strong><br>
            <ul style="text-decoration: none;">

            @foreach($array['produtos'] as $produto)
                @dd($array)
                <li>{{ $produto->nome }}</li>

            @endforeach
            </ul>
        </p>
        <div class="d-flex justify-content-between align-items-center">

            <div class="text-muted">
                <i class="bi bi-cash-coin"></i> {{ $pedido->valor_total }}
            </div>
            <div class="text-muted">
                <i class="bi bi-clock-fill"></i> {{ $pedido->data }}
            </div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between">

        @if ( $pedido->status=='solicitado')
        <button class="btn btn  text-light" style="background-color:rgba(11, 215, 11, 0.677); margin-right: 10px;">Status: {{ $pedido->status }}</button>
       @elseif ($pedido->status=='cancelado')

       <button class="btn btn  text-light" style="background-color:red; margin-right: 10px;">Status: {{ $pedido->status }}</button>

        @endif

        <button class="btn btn text-light"  style="background-color:rgb(0, 72, 255)">FINALIZAR</button>

    </div>
</div>

    @endforeach


