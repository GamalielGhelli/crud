<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id'
    ];
    public function parent(){
        return $this->belongsTo(categoria::class, 'parente_id');
    }
    public function children(){
        return $this->hasMany(categoria::class,'parente_id');
    }
    public static function boot(){
        parent::boot();
        static::creating(function($categoria){
            $categoria->slug = Str::slug($categoria->name);
    });
}
public function carros()
    {
        return $this->hasMany(carro::class, 'categoria_id');
    }
}
