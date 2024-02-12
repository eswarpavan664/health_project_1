<?php

// HealthcareProvider.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthcareProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'coreuser_id',
        'health_admin_id',
    ];

    public function core_user()
    {
        return $this->belongsTo(CoreUser::class);
    }

    public function health_admin()
    {
        return $this->belongsTo(HealthAdmin::class);
    }
}
