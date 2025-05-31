<?php

namespace App\Models\Admin;

use App\Models\Admin\receiptModelAdmin as AdminReceiptModelAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class deliveryModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'deliveries';
    protected $fillable = [
        'companyName',
        'tel'
    ];

    public function Receipt(): HasMany{
        return $this->hasMany(AdminReceiptModelAdmin::class, 'delivery_id', 'id');
    }

    public function DeliveryDetail(): HasMany{
        return $this->hasMany(deliveryModelAdmin::class, 'delivery_id', 'id');
    }
}
