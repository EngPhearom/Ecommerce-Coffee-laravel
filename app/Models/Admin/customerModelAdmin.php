<?php

namespace App\Models\Admin;

use App\Models\Admin\orderModelAdmin as AdminOrderModelAdmin;
use App\Models\Admin\paymentModelAdmin as AdminPaymentModelAdmin;
use App\Models\Admin\receiptModelAdmin as AdminReceiptModelAdmin;
use App\Models\Admin\userModelAdmin as AdminUserModelAdmin;
use App\Models\orderModelAdmin;
use App\Models\paymentModelAdmin;
use App\Models\receiptModelAdmin;
use App\Models\userModelAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class customerModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $fillable = [
        'user_id',
        'firstName',
        'lastName',
        'gender',
        'emailAddress',
        'phoneNumber',
        'datetime'
    ];

    public function User(): BelongsTo{
        return $this->belongsTo(AdminUserModelAdmin::class, 'user_id', 'id');
    }

    public function Order(): HasMany{
        return $this->hasMany(AdminOrderModelAdmin::class, 'customer_id', 'id');
    }

    public function Payment(): HasMany{
        return $this->hasMany(AdminPaymentModelAdmin::class, 'customer_id', 'id');
    }

    public function Receipt(): HasMany{
        return $this->hasMany(AdminReceiptModelAdmin::class, 'customer_id', 'id');
    }
}
