<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="options";
    protected $guarded = [];
    protected $fillable = [
        'quiz_id',
        'question_id',
        'option',
        'is_answered',
        'is_correct'
    ];
}
