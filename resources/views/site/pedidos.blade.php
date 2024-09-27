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
        
<div class="col-md-3 card mt-3 mb-3 m-3" style="width: 18rem;">
    <div class="card-header d-flex justify-content-between ">
        <span class="badge bg-primary 2x">1°</span>
        <h5 class="mb-0">Mesa 1</h5>
        <span class="badge bg-warning" >Pedido 686</span>
    </div>
    <div class="card-body w-100">

        <p class="card-text">
            <strong><i class="bi bi-person-fill"></i> David</strong><br>
            <ul style="text-decoration: none;">
                <li>Hamburguer</li>
                <li>Heineken</li>
                <li>Espetinho</li>
            </ul>
        </p>
        <div class="d-flex justify-content-between align-items-center">
            
            <div class="text-muted">
                <i class="bi bi-cash-coin"></i> R$54,45
            </div>
            <div class="text-muted">
                <i class="bi bi-clock-fill"></i> 26/09/2024
            </div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <button class="btn btn  text-light" style="background-color:purple;">PRONTO</button>
        <button class="btn btn text-light"  style="background-color:green">ENTREGUE</button>
    </div>
</div>

<div class="col-md-3 card mt-3 mb-3 m-3" style="width: 18rem;">
    <div class="card-header d-flex justify-content-between ">
        <span class="badge bg-primary 2x">2°</span>
        <h5 class="mb-0">Mesa 2</h5>
        <span class="badge bg-warning" >Pedido 666</span>
    </div>
    <div class="card-body">

        <p class="card-text">
            <strong><i class="bi bi-person-fill"></i> Lipo</strong><br>
            <ul style="text-decoration: none;">
                <li>Salada</li>
                <li>Brahma</li>
                <li>Acarajé</li>
            </ul>
        </p>
        <div class="d-flex justify-content-between align-items-center">
            
            <div class="text-muted">
                <i class="bi bi-cash-coin"></i> R$74,35
            </div>
            <div class="text-muted">
                <i class="bi bi-clock-fill"></i> 26/09/2024
            </div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <button class="btn btn  text-light" style="background-color:purple;">PRONTO</button>
        <button class="btn btn text-light"  style="background-color:green">ENTREGUE</button>
    </div>
</div>

</div>

</body>
<style>


.bg-dark{
        background-color: rebeccapurple;

    }
.card-body{ 
    background-color: #cbdfcb;
}
i{
    color:black;
}


.btn{
    width: 45%;
    height:50px;
    box-shadow: 5px 5px 5px grey;

}

</style>
</html>