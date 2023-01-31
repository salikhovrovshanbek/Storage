<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "count",
        "status",
        "store_id",
        "client_id"
    ];

    protected function store()
    {
        return $this->belongsTo(Store::class);
    }

    protected function client()
    {
        return $this->belongsTo(Client::class);
    }
}
