<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceivedProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'receipt_id', 'product_id', 'stock', 'stock_defective'
    ];

    public function receipt()
    {
        return $this->belongsTo('App\Models\Receipt');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
