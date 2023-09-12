<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookdb extends Model
{
    use HasFactory;
    protected $table="bookdb";
    protected $primarykey="id";
}
