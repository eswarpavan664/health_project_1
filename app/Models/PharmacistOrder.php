<?php

// PharmacistOrder.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacistOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'status',
        'prescription_id',
        'created_by_id',
    ];

    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

    public function created_by()
    {
        return $this->belongsTo(CoreUser::class, 'created_by_id');
    }
}
