<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class receiptModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'receipt';
    protected $fillable = [
        'order_id',
        'receiptDate',
        'amount',
        'customer_id',
        'delivery_id'
    ];

    public function Order(): BelongsTo{
        return $this->belongsTo(orderModelAdmin::class, 'order_id', 'id');
    }

    public function Customer(): BelongsTo{
        return $this->belongsTo(customerModelAdmin::class, 'customer_id', 'id');
    }

    public function Delivery(): BelongsTo{
        return $this->belongsTo(deliveryModelAdmin::class, 'delivery_id', 'id');
    }
}
