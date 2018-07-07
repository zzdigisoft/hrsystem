<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'users_id','name','place_birth','date_birth','gender','religion','staff_id','position','unit','bpjs_number','bank_number','phone','current_address','origin_address','email'
    ];
}
