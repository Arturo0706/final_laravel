<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];

    public function Category(){

        return $this->hasOne(Category::class,'foreign_key');
        
    }
}
