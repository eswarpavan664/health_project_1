<?php

// Patient.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'coreuser_id',
        'height',
        'weight',
        'blood_pressure',
        'heart_rate',
        'temperature',
        'blood_glucose',
        'smoking',
        'drinking',
    ];

    public function core_user()
    {
        return $this->belongsTo(CoreUser::class);
    }

    public function secure_messaging()
    {
        return $this->hasMany(SecureMessaging::class);
    }
}
