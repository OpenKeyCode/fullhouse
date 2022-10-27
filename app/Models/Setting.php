<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'icon_site',
        'address',
        'contact_instagram',
        'contact_facebook',
        'contact_telegram',
        'contact_phone',
        'telegram_token'
    ];

}
