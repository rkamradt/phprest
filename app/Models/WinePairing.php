<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WinePairing extends Model
{
    protected $table = 'wine_pairing';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'wine',
        'wine_description',
        'cheese',
        'cheese_description',
        'pairing_notes'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
