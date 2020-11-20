<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $fillable = ['option_description', 'poll_id', 'amount'];

    public function poll() {
        return $this->belongsTo(Poll::class,'poll_id');
    }

}
