<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    protected $table = 'activity';
    public $timestamps  = false;
    use HasFactory;
}
