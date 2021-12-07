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
     * Get the responses for the poll.
     */
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
