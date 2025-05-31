<?php

namespace App\Models\Admin;

use App\Models\Admin\deliveryModelAdmin;
use App\Models\orderModelAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class deliveryDetailModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'delivery_detail';
    protected $fillable = [
        'delivery_id',
        'order_id',
        'deliveryDate',
        'customer_id',
        'deliveryAddress',
        'deliveryStatus'
    ];

    public function Delivery(): BelongsTo{
        return $this->belongsTo(deliveryModelAdmin::class, 'delivery_id', 'id');
    }

    public function Order(): BelongsTo{
        return $this->belongsTo(orderModelAdmin::class, 'order_id', 'id');
    }

    public function Customer(): BelongsTo{
        return $this->belongsTo(customerModelAdmin::class, 'customer_id', 'id');
    }
}
