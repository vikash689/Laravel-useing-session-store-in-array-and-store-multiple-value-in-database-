<?php

namespace App;

use Carbon\Carbon;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tasks extends Authenticatable
{
    use SoftDeletes, Notifiable;

   

    

    protected $fillable = [
        'name',
		'password',
		'image',
		'phone',
		'role',
		'email',
		'date',
		
       
    ];
}