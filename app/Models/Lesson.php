<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;

class Lesson extends Model
{
    use HasFactory;

    protected $table='lessons';
    protected $guarded=[];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
}
