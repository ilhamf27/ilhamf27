<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function skill()
    {
        //hasOne, hasMany, belongTo, belongsToMany
        return $this->hasMany(Skill::class);
    }
}
