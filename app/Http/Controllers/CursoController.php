<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoStoreRequest;
use App\Http\Requests\CursoUpdateRequest;
use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Curso;

class CursoController extends Controller
{
    private $cursos;
    public function __construct(Curso $curso)
    {
        $this->cursos = $curso;
    }


    public function index()
    {
        $cursos = $this->cursos->all();
        return view('admin.curso.index',compact('cursos'));
    }


    public function create()
    {
        return view('admin.curso.crud');
    }


    public function store(CursoStoreRequest $request)
    {
        $data = $request->all();
        $this->cursos->create($data);
        return redirect()->route('curso.index')->with('sucess', 'Curso cadastrado com sucesso');
    }

    public function edit($id)
    {
        $curso = $this->cursos->find($id);
        return view('admin.curso.crud', compact('curso'));
    }

    public function update(CursoUpdateRequest $request, $id)
    {
        $data = $request->all();
        $curso = $this->cursos->find($id);

        $curso->update($data);
        return redirect()->route('curso.index')->with('sucess', 'Curso atualizado com sucesso.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = $this->cursos->find($id);
        return response()->json($curso);
    }

    public function destroy($id)
    {
        $curso = $this->cursos->find($id);
        $curso->delete();
        return redirect()->route('curso.index')->with('sucess', 'Curso apagado com sucesso.');
    }
}
