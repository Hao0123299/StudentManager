<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectClass extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $fillable = ['code', 'subjectName', 'price'];

    // Quan hệ nhiều-một với bảng "student"
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Quan hệ nhiều-một với bảng "teacher"
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
