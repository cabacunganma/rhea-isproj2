<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'userID';
    protected $table = 'users';

    protected $fillable = [
      'lastName', 'firstName', 'middleName', 'emailAddress','password', 'status', 'dateArchived', 'dateModified', 'dateAdded',
        'birthdate', 'userRoleID', 'specializations'
    ];
}
