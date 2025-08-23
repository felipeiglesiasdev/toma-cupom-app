<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';

    protected $fillable = [
        'nome',
        'slug',
    ];

    // RELACIONAMENTO
    public function lojas()
    {
        return $this->belongsToMany(Loja::class, 'loja_categoria', 'id_categoria', 'id_loja');
    }
}
