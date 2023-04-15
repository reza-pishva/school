<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamStudent extends Model
{
    use HasFactory;
    protected $table = "exam_students";
    protected $guarded = [];

    public function scopeYear($query, $type)
    {
        return $query->where('year', $type);
    }
}
