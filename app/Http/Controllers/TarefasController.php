<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Tarefa;

class TarefasController extends Controller
{
    public function index() {
        $list = Tarefa::getAll();

        return view('tarefas.index', [
            'list' => $list
        ]);
    }

    public function add() {
        return view('tarefas.add');

    }

    public function addAction(Request $request) {

        $request->validate([
            'titulo' => ['required', 'string']
        ]);

        $titulo = $request->titulo;
        Tarefa::add($titulo);

        return redirect('/tarefas');
    }

    public function edit($id) {
        $task = Tarefa::getById($id);

        if (count($task) > 0) {
            return view('tarefas.edit', [
                'tarefa'=>$task[0]
            ]);
        } else {
            return redirect('/tarefas');
        }

    }

    public function editAction(Request $request, $id) {

        if ($request->filled('titulo')) {
            $titulo = $request->titulo;
            $task = Tarefa::getById($id);

            if (count($task) > 0) {
                Tarefa::edit($id, $titulo);
            }

            return redirect('/tarefas');
        } else {
            return redirect("/tarefas/edit/$id");
        }

    }

    public function delete($id) {
        Tarefa::remove($id);
        return redirect('/tarefas');
    }

    public function resolved($id) {

        $task = Tarefa::getById($id)[0];

        if ($task) {
            $resolved = $task->resolvido === 1 ? 0 : 1;
            Tarefa::editResolved($id, $resolved);
        }

        return redirect('/tarefas');

    }

}
