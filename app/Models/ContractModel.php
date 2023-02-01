<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractModel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function client()
    {
        return $this->belongsTo(ClientsModel::class);
    }

    public function company()
    {
        return $this->belongsTo(CompanyModel::class);
    }

    public function cashbox()
    {
        return $this->hasMany(CashBoxModel::class)->orderBy('id');
    }

    public function contractwithproducts()
    {
        return $this->hasMany(ContractWithProductsModel::class)->orderBy('id');
    }
}
