<?php

use App\Http\Controllers\OptionController;
use App\Http\Controllers\PollController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('poll', PollController::class);
Route::resource('option', OptionController::class);

Route::get('polls',[PollController::class, 'questions']);
Route::post('create/poll/option', [PollController::class,'storePollOption']);
Route::get('show/poll/option/{id}', [PollController::class,'showPollOption']);
