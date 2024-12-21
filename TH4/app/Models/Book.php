<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    public function borrows()
    {
        //one-to-many
        return $this->hasMany(Borrow::class); //Một cuốn sách (Book) có thể được mượn nhiều lần (nhiều bản ghi trong bảng borrows)
    }


    protected $fillable = [
        'id',
        'name',
        'author',
        'category',
        'year',
        'quantity',
        'created_at',
        'updated_at',
    ];
}
