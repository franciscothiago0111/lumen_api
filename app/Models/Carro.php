<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model{
    protected $table = 'carros';

    protected $fillable = [
        'nome',
        'descricao',
        'modelo',
        'data'
        
    ];

    protected $casts = [
        'data' => 'timestamp',
    ]; 

    public $timestamps = false;


}