<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubNotify extends Model {

    protected $table = 'sub_notify';

    protected $fillable = [
        'msisdn', 'json_data', 'app_id', 'sub_status', 'subscribed'
    ];

    protected $hidden = [
        //
    ];


}
