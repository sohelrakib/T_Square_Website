<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportantNumber extends Model {

    protected $table = 'important_numbers';

    protected $fillable = [
        'category', 'division_id', 'name', 'address', 'phone', 'email', 'status'
    ];

    protected $hidden = [
        //
    ];


}
