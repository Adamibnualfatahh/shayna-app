<?php

namespace App\Models;

use App\Models\TransactionDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'uuid',
        'name', 
        'email',
        'number',
        'address',
        'transaction_total',
        'transaction_status'
    ];

    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }

}
