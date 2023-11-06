<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model //deklarasi
{
    use HasFactory;
    protected $table = 'products';

}
