<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    private $alunos;
    public function __construct(Aluno $aluno)
    {
        $this->alunos = $aluno;
    }

    public function index()
    {
        $alunos = $this->alunos->paginate(9);
        return view('site.index', compact('alunos'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
