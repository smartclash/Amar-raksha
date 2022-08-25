<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'message',
        'starts_at',
        'event_id'
    ];

    protected $casts = [
        'starts_at' => 'timestamp'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
