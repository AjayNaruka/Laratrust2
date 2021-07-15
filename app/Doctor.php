<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['user_id','surname','date_of_birth','CF','address','city','phone_number','cv_url','img_url','sponsor_level'];
}
