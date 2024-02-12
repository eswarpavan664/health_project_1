<?php
// Message.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'sent_by_id',
        'sent_to_id',
        'secure_messaging_id',
    ];

    public function secure_messaging()
    {
        return $this->belongsTo(SecureMessaging::class);
    }
}
