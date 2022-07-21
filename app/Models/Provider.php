<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name', 'description', 'email', 'phone', 'paymentinfo'
    ];

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function receipts()
    {
        return $this->hasMany('App\Models\Receipt');
    }
}
