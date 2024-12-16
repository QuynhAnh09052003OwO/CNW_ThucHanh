<?php

namespace App\Models;

//them khai bao use HasFactory
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //them use
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'long_description',
        'completed',
        'created_at',
        'updated_at',
    ];
}
