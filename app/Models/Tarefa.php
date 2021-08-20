<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tarefa extends Model
{

    // protected $table = 'tarefas'; // nome da table
    // protected $primaryKey = 'id'; // chave primaria da tabela
    // public $incrementing = true; // se a chave primaria é auto increment
    // protected $keyType = 'number'; // type da chave primaria

    protected $fillable = ['titulo', 'resolvido'];

    // created_at, update_at
    public $timestamps = false;

    // const CREATED_AT = 'date_created'; // se a coluna created_at tiver com nome diferente
    // const UPDATED_AT = 'data_updated' // se a coluna update_at tiver com nome diferente

    public static function getAll () {
        // $sql = 'SELECT * FROM tarefas';
        // return DB::select($sql);

        return Tarefa::all();
    }

    public static function getById ($id) {
        // $sql = "SELECT * FROM tarefas WHERE id = $id ";
        // return DB::select($sql);

        return Tarefa::where('id', $id)->get();
    }

    public static function add ($titulo) {
        // $sql = "INSERT INTO tarefas (titulo) VALUES (:titulo)";
        // DB::insert($sql, ['titulo'=>$titulo]);

        $t = new Tarefa;
        $t->titulo = $titulo;
        $t->save();
    }

    public static function edit ($id, $titulo) {
        // $sql = 'UPDATE tarefas SET titulo = :titulo WHERE id = :id';
        // return DB::update($sql, ['id' => $id, 'titulo' => $titulo]);

        Tarefa::find($id)->update(['titulo' => $titulo]);
    }

    public static function remove ($id) {
        // $sql = 'DELETE FROM tarefas WHERE id = :id';
        // return DB::delete($sql, [':id' => $id]);

        Tarefa::find($id)->delete();
    }

    public static function editResolved ($id, $resolved) {
        // $sql = 'UPDATE tarefas SET resolvido = :resolvido WHERE id = :id';
        // return DB::update($sql, ['id' => $id, 'resolvido' => $resolved]);

        Tarefa::find($id)->update(['resolvido' => $resolved]);
    }
}

