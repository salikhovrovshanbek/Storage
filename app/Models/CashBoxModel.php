<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashBoxModel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function contract()
    {
        return $this->belongsTo(ContractModel::class);
    }
}
