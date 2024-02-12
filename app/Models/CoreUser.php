<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by_id', // Assuming this represents the user who created this user
        'name',          // User's name
        'email',         // User's email (should be unique)
        'phone',         // User's phone number (optional)
        'dob',           // User's date of birth (optional)
        'gender',        // User's gender (optional)
        'address',       // User's address (in JSON format)
        'user_type_id',  // Assuming this links to the user's type (e.g., admin, healthcare provider)
    ];

    // Assuming relationships with other models
    public function user_type()
    {
        return $this->belongsTo(UserType::class);
    }

    public function health_admin()
    {
        return $this->hasOne(HealthAdmin::class);
    }

    public function healthcare_provider()
    {
        return $this->hasOne(HealthcareProvider::class);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

    public function pharmacist()
    {
        return $this->hasOne(Pharmacist::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function prescription()
    {
        return $this->hasMany(Prescription::class);
    }

    public function pharmacist_orders()
    {
        return $this->hasMany(PharmacistOrder::class);
    }

    public function secure_messaging()
    {
        return $this->hasMany(SecureMessaging::class);
    }
}
