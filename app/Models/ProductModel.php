<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function store()
    {
        return $this->belongsTo(StoreModel::class);
    }

    public function contractwithproducts()
    {
        return $this->hasMany(ContractWithProductsModel::class)->orderBy('id');
    }
}
