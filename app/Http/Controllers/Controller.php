<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use phpDocumentor\Reflection\Types\This;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $class;

    public function index()
    {
        return response()->json($this->class::all(), 201);
    }

    public function store(Request $request) {
        $register = new $this->class($request->all());
        $register->save();
        return response()->json($register);
    }

    public function show($id)
    {
        return response()->json($this->class::find($id));
    }

    public function update(Request $request, $id) {
        $register = $this->class::find($id);
        $register->fill($request->all());
        $register->save();
        return response()->json($register);
    }

    public function destroy($id) {
        $register = $this->class::find($id)->delete();
        if($register === 1) {
            return response()->json('Registro não existe');
        }
        return response()->json('excluido com sucesso');

    }

}
