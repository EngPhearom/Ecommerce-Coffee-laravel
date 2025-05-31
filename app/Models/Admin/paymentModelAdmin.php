<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class paymentModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $fillable = [
        'order_id',
        'customer_id',
        'paymentDate',
        'paymentMethod',
        'amoundPaid',
        'status'
    ];

    public function Order(): BelongsTo{
        return $this->belongsTo(orderModelAdmin::class, 'ordder_id', 'id');
    }

    public function Customer(): BelongsTo{
        return $this->belongsTo(customerModelAdmin::class, 'customer_id', 'id');
    }
}
