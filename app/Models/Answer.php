<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'poll_id',
        'text',
    ];

    /**
     * Get the poll that owns the response.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    /**
     * Get the responses that belong to the answer.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responders()
    {
        return $this->belongsToMany(Responder::class);
    }
}
