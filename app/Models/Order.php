<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    /* Defined Relationships*/
    public function customer()
    {
        return $this->belongsTo(Customers::class, "customer_id", "id");
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class, "sale_id", "id");
    }
}
