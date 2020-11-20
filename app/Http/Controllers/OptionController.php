<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function __construct()
    {
        $this->class = Poll::class;
    }
    public function questions() {
        $register = Poll::with('options')->get();
        return $register;
    }
    public function storePollOption(Request $request)
    {

        $poll = new Poll();
        $poll->poll_description = $request['poll_description'];
        $poll->save();

        foreach ($request->options as $item) {
            $option = new Option();
            $option->option_description = $item;
            $option->poll_id = $poll->id;
            $option->save();
        }

        return response()->json($request);
    }

    public function showPollOption($id) {

        $register = Poll::with('options')->where('polls.id', $id)->get();

        if(is_null($register)) {
            return response()->json($register);
        }

        return response()->json('',404);
    }
}
