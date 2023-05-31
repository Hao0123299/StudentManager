<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teacher';
    protected $fillable = ['codeTeacher', 'name', 'birthday', 'email', 'phone', 'address', 'sex', 'cccd', 'classSubject'];

    // Quan hệ một-nhiều với bảng "subjectClass"
    public function SubjectClass()
    {
        return $this->hasMany(Subjects::class);
    }
}
