<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['pavadinimas', 'kodas', 'pvm_kodas', 'adresas', 'telefonas', 'el_pastas', 'veikla', 'vadovas'];
}
