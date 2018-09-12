<?php

namespace App\UserModel;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $primaryKey = 'id';
	protected $table = 'users';
	protected $quarded = [];
	protected $hidden = ['password'];
	public $timestamps = false;
}
