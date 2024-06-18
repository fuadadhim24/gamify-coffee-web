<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';
    protected $primaryKey = 'id_quiz';
    protected $fillable = ['title', 'created_at', 'updated_at'];

    public function questions()
    {
        return $this->hasMany(Question::class, 'id_quiz');
    }
}