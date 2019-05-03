<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $fillable = ['patient', 'city', 'location', 'group', 'hospital', 'contact_person', 'contact_phone', 'contact_email', 'when'];

    protected $hidden =[];
}
