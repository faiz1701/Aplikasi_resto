<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable =[
        'kategori',
    ];

    protected function menu(){
        return $this->hasMany(Menu::class);
    }
}
