<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'skills',
        'skills_description',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
