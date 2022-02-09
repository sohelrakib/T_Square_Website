<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';

    protected $fillable = [
        'unique_id', 'msisdn', 'status'
    ];

    protected $hidden = [
        //
    ];


}
