<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content','teacher_name',
    ];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
