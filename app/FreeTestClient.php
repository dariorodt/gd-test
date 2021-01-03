<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FreeTestClient extends Model
{
	use Notifiable;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'can_send_email', 'first_name', 'last_name', 'phone', 'job', 'department', 'company_name', 'nif', 'employees_count', 'password',];
    
    
}
