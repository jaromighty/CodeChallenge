<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get the answers for the poll.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    /**
     * Get the responses for the poll.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    // public function responses()
    // {
    //     return $this->hasManyThrough(Responder::class, Answer::class);
    // }
}
