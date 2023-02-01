<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreModel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function company()
    {
        return $this->belongsTo(CompanyModel::class);
    }

    public function product()
    {
        return $this->hasMany(ProductModel::class)->orderBy('id');
    }
}
