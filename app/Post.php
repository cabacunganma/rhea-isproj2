<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'users';
    //Primary Key
    public $primaryKey = 'userID';
    //Timestamps
    public $timestamps = true;
}
