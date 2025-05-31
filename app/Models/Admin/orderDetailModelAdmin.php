<?php

namespace App\Models\Admin;

use App\Models\Admin\orderModelAdmin as AdminOrderModelAdmin;
use App\Models\Admin\productModelAdmin as AdminProductModelAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class orderDetailModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'order_detail';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'priceEach',
        'totalPrice'
    ];

    public function Order(): BelongsTo{
        return $this->belongsTo(AdminOrderModelAdmin::class, 'order_id', 'id');
    }

    public function Product(): BelongsTo{
        return $this->belongsTo(AdminProductModelAdmin::class, 'product_id', 'id');
    }
}
