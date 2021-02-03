<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'is_active'];

    public function companies()
    {
        return $this->hasMany(Company::class, 'category_id');
    }

}
