<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    protected $table = 'tour';
    public $timestamps = false;
    use HasFactory;
}
