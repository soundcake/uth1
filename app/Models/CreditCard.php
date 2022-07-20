<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'card_number',
        'expiry_month',
        'expiry_year',
    ];

    /**
     * Get the user that owns the credit card.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
