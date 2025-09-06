<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CookieConsent extends Model
{
    use HasUuids;

    protected $fillable = [
        'version',
        'accepted_at',
        'expires_at',
    ];
}
