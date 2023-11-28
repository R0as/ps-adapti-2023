<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected  $table = 'alunos';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'contratado',
        'cursos_id',
    ];

    public function curso(){
        return $this->belongsTo(Curso::class,'cursos_id');
    }
}
