<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Aluno;
use App\Models\Curso;

class SearchController extends Controller
{
    private $alunos;
    private $cursos;

    public function __construct(Aluno $aluno, Curso $curso)
    {
        $this->alunos = $aluno;
        $this->cursos = $curso;
    }
    public function search(SearchRequest $request)
    {
        $search_text = $request['search'];

        $alunos = $this->alunos
            ->where('nome', 'like', "%$search_text%")
            ->orWhereHas('curso', function ($query) use ($search_text) {
                $query->where('curso', 'like', "%$search_text%");
            })
            ->paginate(9);
        if ($alunos->isEmpty()) {
            return view('site.resultado_nao_encontrado');
        }
        return view('site.index', compact('alunos'));
    }
}
