<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'transactions_id',
        'products_id'
    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'transactions_id','id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }
}


