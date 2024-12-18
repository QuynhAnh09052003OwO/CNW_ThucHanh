<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function borrows()
    {
        //one-to-many
        return $this->hasMany(Borrow::class); //Một cuốn sách (Book) có thể được mượn nhiều lần (nhiều bản ghi trong bảng borrows)
    }
}
