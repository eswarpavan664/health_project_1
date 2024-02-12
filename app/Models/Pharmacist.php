<?php

// Pharmacist.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    use HasFactory;

    protected $fillable = [
        'coreuser_id',
        'degree',
        'license_number',
        'board_certification',
        'work_experience',
    ];

    public function core_user()
    {
        return $this->belongsTo(CoreUser::class);
    }
}
