<?php

// HealthAdmin.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'coreuser_id',
        'email',
    ];

    public function core_user()
    {
        return $this->belongsTo(CoreUser::class);
    }

    public function healthcare_providers()
    {
        return $this->hasMany(HealthcareProvider::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
