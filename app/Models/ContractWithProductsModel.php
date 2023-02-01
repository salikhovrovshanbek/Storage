<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractWithProductsModel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function product()
    {
        return $this->belongsTo(ProductModel::class);
    }

    public function contract()
    {
        return $this->belongsTo(ContractModel::class);
    }
}
