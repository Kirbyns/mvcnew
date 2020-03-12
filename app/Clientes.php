<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [ // atributo das colunas 
     'id',   
    'nome',
    'endereco',
    'email',
    'telefone' 
    ];

    protected $table = 'Clientes'; // atributo do nome da tabela 
    
    public function vendas(){
        return $this->hasMany(Vendas::class,'cliente_id'); // relacionamento de um para varios has many 
    }
}
