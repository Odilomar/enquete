<?php

namespace App\Http\Controllers;

use App\Models\Option;

class OptionController extends Controller
{

    public function __construct()
    {
        $this->class = Option::class;
    }

    public function createOption($poll_id)
    {
        $register = Option::where('poll_id', $poll_id)->get();
        return response()->json($register);
    }

    public function votacao($id)
    {
        $option = Option::find($id);

        if(is_null($option)) {
            return response()->json('',404);
        }

        $option->amount+=1;
        $option->save();
        return $option->id;
    }

}
