<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function companies() {
        return $this->belongsToMany('App\Models\Company', 'user_name'); // A categoria tem muitas empresas
    }
}
