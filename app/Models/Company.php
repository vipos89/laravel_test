<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'description', 'address', 'location', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
