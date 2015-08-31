<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'school',
        'school_degree',
        'school_description',
        'started_on',
        'ended_on',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
