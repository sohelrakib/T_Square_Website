<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UssdSession extends Model {

    protected $table = 'ussd_session';

    protected $fillable = [
        'msisdn', 'menu', 'session_id', 'message'
    ];

    protected $hidden = [
        //
    ];


}
