<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos()
    {
            //withPivot() serve pra acessar alguma coluna da tabela da qual estamos fazendo o relacionamento muito pra muitos
        return $this->belongsToMany(Item::class, 'pedido_produtos', 'pedido_id', 'produto_id')->withPivot('created_at', 'updated_at', 'id');
        /*
         * parametros:
         * 1 - Modelo do relacionamento NxN em relação o Modelo que estamos implementando
         * 2 - É a tabela auxiliar que armazena os registros do relacionamento
         * 3 - Representa o nome da FK da tabela mapeada pelo modelo na tabela de relacionamento
         * 4 - Nome da FK mapeada pelo Model utilizado no relacionamento que estamos utilizando
         */
    }
}
