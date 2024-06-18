<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options';
    protected $primaryKey = 'option_id'; // Sesuaikan dengan nama primary key yang Anda gunakan

    protected $fillable = [
        'question_id',
        'content',
        'is_correct',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'question_id');
    }
}
