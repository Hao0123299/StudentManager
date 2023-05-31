<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $fillable = ['codeStudent', 'name', 'subjectClass', 'phone', 'date'];

    // Quan hệ một-nhiều với bảng "subjectClass"
    public function SubjectClass()
    {
        return $this->hasMany(Subject::class);
    }
}
