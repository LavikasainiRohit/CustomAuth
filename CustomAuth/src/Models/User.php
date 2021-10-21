<?php

namespace DevinGray\CustomAuth\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $grauded = [];
    protected $fillable = [
        'name',
        'email',
        'password',

    ];
}
