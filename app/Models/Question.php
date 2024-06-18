<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $primaryKey = 'question_id';

    protected $fillable = [
        'id_quiz',
        'content',
        'created_at', 
        'updated_at'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'id_quiz', 'id_quiz');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'question_id', 'question_id');
    }
}
