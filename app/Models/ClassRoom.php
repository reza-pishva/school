<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ClassRoom extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table='class_rooms';
    protected $guarded=[];
    
}
