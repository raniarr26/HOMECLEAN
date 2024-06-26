<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_hp',
        'total',
    ];
    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }
}