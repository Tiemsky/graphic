<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnableRegistration extends Model
{
    use HasFactory;
    protected $fillable = ['is_registration_enabled'];
}
