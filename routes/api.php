<?php

use App\Http\Controllers\OptionController;
use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;


Route::resource('poll', PollController::class);
Route::resource('option', OptionController::class);

Route::get('polls',[PollController::class, 'questions']);
Route::post('create/poll/option', [PollController::class,'storePollOption']);
Route::get('show/poll/option/{id}', [PollController::class,'showPollOption']);
Route::get('options/{id}', [OptionController::class, 'createOption']);
Route::get('votacao/{id}',[OptionController::class,'votacao']);
Route::get('/poll/{id}/stats', [PollController::class, 'pollStats']);
