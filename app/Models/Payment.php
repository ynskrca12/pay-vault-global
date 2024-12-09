<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // Fillable property to define which fields are mass assignable
    protected $fillable = [
        'user_id',
        'card_number',
        'expiry_date',
        'cvv',
        'amount',
    ];

    // Cast 'amount' as decimal for proper formatting and calculations
    protected $casts = [
        'amount' => 'decimal:2',
    ];

    // If you want to ensure the timestamps are created/updated automatically
    public $timestamps = true;

    // Optionally, you can define relationships here (if needed)
    // For example, if you want to access the related user:
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
