<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'reference', 'amount', 'payment_method_id', 'type', 'client_id', 'user_id', 'sale_id', 'provider_id', 'transfer_id'
    ];

    public function method()
    {
        return $this->belongsTo('App\Models\PaymentMethod', 'payment_method_id');
    }

    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }

    public function sale()
    {
        return $this->belongsTo('App\Models\Sale');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function transfer()
    {
        return $this->belongsTo('App\Models\Transfer');
    }

    public function scopeFindByPaymentMethodId($query, $id)
    {
        return $query->where('payment_method_id', $id);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('created_at', Carbon::now()->month);
    }
}
