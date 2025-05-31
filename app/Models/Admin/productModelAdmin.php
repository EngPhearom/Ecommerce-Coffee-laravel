<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class productModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'productName',
        'description',
        'category',
        'price'
    ];

    public function Inventory(): HasMany{
        return $this->hasMany(inventoryModelAdmin::class, 'product_id', 'id');
    }

    public function OrderDetail(): HasMany{
        return $this->hasMany(orderDetailModelAdmin::class, 'product_id', 'id');
    }
}
