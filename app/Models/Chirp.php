<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    protected $fillable = [ //ระบุฟิลที่สามารถบันทึกได้
        'message',
    ];
    
    public function user(): BelongsTo //ระบุความสัมพันระหว่างผู้ใช้
    {
        return $this->belongsTo(User::class);
    }
}
