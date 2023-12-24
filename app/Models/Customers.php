<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $casts = [
        "date_of_birth" => "datetime",
        "verified_at" => "datetime",
        "password" => "hashed"
    ];

    /* Define Relationships*/
    public function orders()
    {
        return $this->hasMany(Order::class, "customer_id", 'id');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class, "customer_id", "id");
    }
}
