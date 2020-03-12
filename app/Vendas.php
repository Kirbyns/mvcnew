<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [ // atributo das colunas 
        'id',
        'cliente_id',
        'data_da_venda',
        'vendedor_id'
    ];
    protected $table = 'Vendas'; // atributo do nome da tabela 

    public function cliente(){
        return $this->belongsTo(Clientes::class,'cliente_id'); // relacionamento de 1 venda a apenas 1 cliente 'belongsTo'
    }

}
