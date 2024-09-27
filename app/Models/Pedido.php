<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id', 'produto_id','user_id', 'quantidade', 'preco', 'status'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class); // Certifique-se de ter um modelo Produto
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Certifique-se de ter um modelo Produto
    }
}
