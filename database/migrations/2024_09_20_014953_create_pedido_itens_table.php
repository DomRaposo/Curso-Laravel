<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedido_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained()->onDelete('cascade'); // Referência ao pedido
            $table->foreignId('produto_id')->constrained('produtos')->onDelete('cascade'); // Referência ao produto
            $table->integer('quantidade'); // Quantidade do produto no pedido
            $table->decimal('preco', 10, 2); // Preço do produto no momento da compra
            $table->string('status')->default('solicitado');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_itens');
    }
};
