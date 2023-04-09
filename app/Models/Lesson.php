<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Grade;

class Lesson extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table='lessons';
    protected $guarded=[];
    public function grade(){
        $this->belongsTo(Grade::class);
    }
}
