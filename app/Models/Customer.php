<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'gender', 'customer_type_id'];

    public function type(): BelongsTo{
        return $this->belongsTo(CustomerType::class, 'customer_type_id');
    }
}
