<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','descricao','prioridade','concluida_em'];

    public function scopeBuscar($query, $termo)
    {
        if ($termo) {
            return $query->where('titulo', 'like', "%{$termo}%");
        }

        return $query;
    }

}


