<?php

// Appointment.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'problem',
        'scheduled_time',
        'status',
        'assigned_to_id',
        'created_by_id',
        'health_admin_id',
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function created_by()
    {
        return $this->belongsTo(CoreUser::class, 'created_by_id');
    }

    public function assigned_to()
    {
        return $this->belongsTo(CoreUser::class, 'assigned_to_id');
    }

    public function health_admin()
    {
        return $this->belongsTo(HealthAdmin::class, 'health_admin_id');
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class);
    }
}
