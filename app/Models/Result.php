<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'result';
    protected $primaryKey = 'result_id'; // Sesuaikan dengan nama primary key yang Anda gunakan

    protected $fillable = [
        'user',
        'skor',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'user');
    }
}
