<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_name'); // Empresa pertence ao model User
    }

    public function categories() {
        return $this->belongsToMany('App\Models\Category'); // Empresa pertence ao model Category
    }
}
