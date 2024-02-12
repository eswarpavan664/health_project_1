<?php

// Prescription.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'assigned_to_id',
        'created_by_id',
        'report_info',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function assigned_to()
    {
        return $this->belongsTo(CoreUser::class, 'assigned_to_id');
    }

    public function created_by()
    {
        return $this->belongsTo(CoreUser::class, 'created_by_id');
    }

    public function pharmacist_orders()
    {
        return $this->hasMany(PharmacistOrder::class);
    }
}
