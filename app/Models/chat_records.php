<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chat_records extends Model
{
    public $timestamps = true;
    protected $table = 'chat_records';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
