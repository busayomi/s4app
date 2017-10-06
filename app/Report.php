<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //Table Name
    protected $table = 'reports';
    //Primary key field
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
