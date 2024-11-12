<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    // Especifica os atributos que podem ser atribuídos em massa
    protected $fillable = ['imagem', 'titulo', 'descricao'];
}
