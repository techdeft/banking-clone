<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wallet extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'balance',
        'trx_pin',
    ];

    protected $hidden = [
        'trx_pin',

    ];

    public function NewBalance($balance)
    {
        return $this->forceFill([
            'balance' => $balance,
        ])->save();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transaction(): HasMany
    {
        return $this->HasMany(Transaction::class);
    }
}
