<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table='books';
  

protected $fillable=['book_title','author_1','author_2','description','publication_year','user_id'];

    protected $primaryKey='book_id';
    public $timestamps=false;
}
