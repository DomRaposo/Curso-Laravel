<?php

namespace App\Http\Controllers;
use App\Models\PedidoItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){





        $pedidos = DB::table('pedidos')
            ->join('produtos', 'pedidos.produto_id', '=', 'produtos.id') // Relacionando 'pedidos' com 'produtos'

            ->join('users', 'pedidos.user_id', '=', 'users.id') // Relacionando 'pedidos' com 'users' pelo user_id
                ->select(
                'pedidos.id AS pedido_id',
                'produtos.nome AS produtos_nome',
                'produtos.descricao',
                DB::raw("REPLACE(FORMAT(produtos.preco, 2), '.', ',') AS preco"),
            DB::raw("DATE_FORMAT(pedidos.created_at, '%d/%m/%Y') AS data"),
            'pedidos.valor_total',
            'users.firstname AS usuario_nome',
            'pedidos.user_id',
            'pedidos.status'
        )

            ->get();


            //$pendente = DB::table('pedidos')->Where('status', '=' , 'solicitado')->get();
        $produtos = DB::table('produtos')
            ->join('pedidos', 'produtos.id', '=', 'pedidos.produto_id') // Altere 'produto_id' para o nome correto da coluna
            ->select('produtos.nome')
            ->get();
            $array = array(
            'produtos' => $produtos
        );




           $num=1;
        // Retorna a view admin.pedidos com os dados dos pedidos
        return view('admin.pedidos', compact('pedidos','num','array'));








    }

}
