<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    use HasFactory;

    protected $fillable = [
            'nome',
            'marca',
            'ano_criacao',
            'fipe',
            'categoria_id'
    ];
    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'categoria_id');
    }
}
