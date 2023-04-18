<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;

class ClassRoom extends Model
{
    use HasFactory;
    
    protected $table='class_rooms';
    protected $guarded=[];

    public function scopeYear($query, $type)
    {
        return $query->where('year', $type);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    public function users(){
        return $this->belongsToMany(User::class,'student_to_classes','class_id','user_id','id','id');
    }
    
}
