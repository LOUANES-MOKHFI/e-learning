<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
   protected $table = 'sitesetting';    // le nom de la table dans la bdd
    protected $fillable = [
		'site_name', 'slegon', 'facebook', 'twitter', 'Adress', 'description', 'image', 'photo_welcom', 'photo_welcom1', 'photo_welcom2',       // les parametres de la table
    ];
}
