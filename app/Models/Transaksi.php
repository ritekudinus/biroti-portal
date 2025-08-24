<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['dompet_kas_id', 'type', 'amount', 'description'];

    public function dompetKas()
    {
        return $this->belongsTo(DompetKas::class);
    }
}
