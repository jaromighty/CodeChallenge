<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'poll_id',
        'response',
        'ip_address',
    ];

    /**
     * Get the poll that owns the response.
     */
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
}
