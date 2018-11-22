<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table = "bu";

    protected $fillable = [
        'bu_name', 'bu_price', 'rooms', 'bu_rent', 'bu_square', 'bu_type', 'bu_small_des',
        'bu_meta', 'bu_longitude', 'bu_latitude', 'bu_long_des', 'bu_status', 'user_id'
    ];

}
