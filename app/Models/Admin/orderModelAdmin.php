<?php

namespace App\Models\Admin;

use App\Models\Admin\employeeModelAdmin as AdminEmployeeModelAdmin;
use App\Models\Admin\paymentModelAdmin as AdminPaymentModelAdmin;
use App\Models\Admin\receiptModelAdmin as AdminReceiptModelAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class orderModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $fillable = [
        'customer_id',
        'orderDate',
        'totalAmount',
        'paymentMethod',
        'status',
        'employee_id',
        'orderDetails'
    ];

    public function Customer(): BelongsTo{
        return $this->belongsTo(customerModelAdmin::class, 'customer_id', 'id');
    }

    public function Employee(): BelongsTo{
        return $this->belongsTo(AdminEmployeeModelAdmin::class, 'employee_id', 'id');
    }

    public function OrderDetail(): HasMany{
        return $this->hasMany(orderDetailModelAdmin::class, 'order_id', 'id');
    }

    public function Payment(): HasMany{
        return $this->hasMany(AdminPaymentModelAdmin::class, 'order_id', 'id');
    }

    public function Receipt(): HasMany{
        return $this->hasMany(AdminReceiptModelAdmin::class, 'order_id', 'id');
    }

    public function DeliveryDetail(): HasMany{
        return $this->hasMany(deliveryDetailModelAdmin::class, 'order_id', 'id');
    }
}
