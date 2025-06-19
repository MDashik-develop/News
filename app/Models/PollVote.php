<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollVote extends Model
{
    protected $fillable = [
        'poll_option_id',
        'user_id',
        'ip_address'
    ];

    public function pollOption()
    {
        return $this->belongsTo(PollOption::class);
    }
}