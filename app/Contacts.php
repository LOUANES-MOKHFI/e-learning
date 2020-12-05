<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacte';
    protected $fillable = ['name','specialite', 'objet', 'message','view'];

}
