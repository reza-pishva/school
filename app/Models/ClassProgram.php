<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassProgram extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='class_programs';
    protected $guarded=[];
}
