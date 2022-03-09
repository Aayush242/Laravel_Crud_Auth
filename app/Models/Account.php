<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    
   public $table = 'accounts';
   protected $fillable = [
        'first_name', 'last_name','email',	'Dob', 'country', 'address', 'phone_no', 'hobby', 'gender'
   ];
}
