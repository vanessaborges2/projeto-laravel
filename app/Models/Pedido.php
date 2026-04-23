<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";

    protected $fillable = [
        'user_id',
        'status',
        'total'
    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function itens(){
        return $this->hasMany(ItensPedido::class, 'pedido_id');
    }
}
