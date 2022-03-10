<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_lastname',	
        'user_firstname',	
        'user_middlename',	
        'user_extname',	
        'email',	
        'password',	
        'user_type'
    ];
}
