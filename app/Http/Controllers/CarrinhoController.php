<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PedidoItem;


class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = \Cart::getContent();
        return view('site.carrinho', compact('itens'));
    }

    public function adicionacarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Seu produto foi adicionado ao carrinho com sucesso!');
    }

    public function removeCarrinho(Request $request)
    {

        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('sucesso', 'Seu produto foi removido do carrinho com sucesso!');
    }

    public function atualizaCarrinho(Request $request)
    {
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity)
            ]
        ]);
        return redirect()->route('site.carrinho')->with('sucesso', 'Seu produto foi atualizado do carrinho com sucesso!');
    }

    public function limparCarrinho()
    {
        \Cart::clear();
        return redirect()->route('site.carrinho')->with('aviso', 'Seu carrinho agora está Vazio!');
    }




    public function show($id)
    {
        $pedido = Produto::where('id', $id)->first();
        $user = User::where('id', $id)->first();
        $pedido = Pedido::where('id', $id)->first();

        $response = Pedido::create([
            'quantidade' => $request['quantidade'],
            'preco' => $requet['preco'],

            'produto_id' => $produto['id'],
            'pedido_id' => $pedido['id'],
            'user_id' => $user['id']
        ]);
    }


    public function finalizarPedido(Request $request)
    {

        $produtos = json_decode($request->itens);



        // Adicione os itens ao pedido e calcule o total
        foreach ($produtos as $produto) {

            $newpedido = new Pedido();
            $newpedido->user_id = auth()->id(); // ou outra lógica para o usuário
            $newpedido->valor_total = \Cart::getTotal();
            $newpedido->status = 'solicitado'; // Status inicial
            $newpedido->produto_id = $produto->id;
            $newpedido->quantidade = $produto->quantity;
            $newpedido->preco = $produto->price;
            $newpedido->save();


            /* $subtotal = $pedido->quantity * $pedido->price; // Calcula o subtotal do item
    $totalPedido += $subtotal; // Soma o subtotal ao total do pedido */
        }

        // Limpe o carrinho
        \Cart::clear();

        return redirect()->route('site.index')->with('sucesso', 'Pedido finalizado com sucesso!');
    }
}
