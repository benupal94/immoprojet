<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $fillable = [
        'nom',
        'prenoms',
        'adresse',
        'contact',
        'personne_ressource'
    ];
}
