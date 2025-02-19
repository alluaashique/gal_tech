<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="questions";
    protected $guarded = [];
    protected $fillable = [
        'quiz_id',
        'question_id',
        'question',
        'is_answered',
        'is_correct'
    ];
    public function options()
    {
        return $this->hasMany(Option::class, 'question_id', 'id');
    }
}
