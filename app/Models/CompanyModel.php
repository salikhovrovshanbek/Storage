<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function store()
    {
        return $this->hasMany(StoreModel::class)->orderBy('id');
    }
    public function contract()
    {
        return $this->hasMany(ContractModel::class)->orderBy('id');
    }
}
