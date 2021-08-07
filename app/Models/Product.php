<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'note',
        'unique_hash'
    ];


    public function categories(){
        return $this->belongsTo('App\Models\Category');
    }

}
