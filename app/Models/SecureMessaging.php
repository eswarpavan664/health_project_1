<?php

// SecureMessaging.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecureMessaging extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_by_id',
        'patient_id',
    ];

    public function created_by()
    {
        return $this->belongsTo(CoreUser::class, 'created_by_id');
    }

    public function created_to()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'coreuser_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
