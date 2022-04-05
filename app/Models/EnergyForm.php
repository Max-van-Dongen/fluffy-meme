<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnergyForm extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'voornaam',
        'achternaam',
        'email',
        'postcode',
        'straat',
        'plaats',
        'telnr',
        'energy_id',
        'iban',
        'verbruik_e',
        'verbruik_g',
    ];
}
