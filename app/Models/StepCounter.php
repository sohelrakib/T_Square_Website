<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StepCounter extends Model {

    protected $table = 'step_counter';

    protected $fillable = [
        'user_id', 'steps', 'distance', 'calorie_burn', 'duration'
    ];

    protected $hidden = [
        //
    ];


}
