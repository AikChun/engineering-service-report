<?php

namespace App;

use \duxet\Rethinkdb\Eloquent\Model;

class ServiceReport extends Model
{
    //
    protected $fillable = [
        'reference_number',
        'contact_person',
        'customer_name',
        'telephone',
        'email',
        'fax',
    ];


}
