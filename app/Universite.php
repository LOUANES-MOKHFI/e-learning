<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
   protected $table = 'universite';
   protected $fillable = ['nom_universite', 'wilaya_universite', 'created_at', 'updated_at', 'id_user'];
}
