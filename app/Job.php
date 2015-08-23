<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job',
        'job_description',
        'job_position',
        'started_on',
        'ended_on',
    ];
}
