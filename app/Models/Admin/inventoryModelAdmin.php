<?php

namespace App\Models\Admin;

use App\Models\Admin\productModelAdmin as AdminProductModelAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class inventoryModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'inventory';
    protected $fillable = [
        'product_id',
        'stockQuantity',
        'costPrice',
        'sellingPrice'
    ];

    public function Product(): BelongsTo{
        return $this->belongsTo(AdminProductModelAdmin::class, 'product_id', 'id');
    }
}
