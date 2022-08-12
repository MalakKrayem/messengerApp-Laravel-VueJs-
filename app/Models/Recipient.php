<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipient extends Pivot
{
    use HasFactory,SoftDeletes;
    protected $cast = ['read_at' => "datetime"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
