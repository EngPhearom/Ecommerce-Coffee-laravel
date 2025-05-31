<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class userModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'userName',
        'password',
        'email',
        'phoneNumber',
        'status',
        'createdDate',
        'lastLogin'
    ];

    public function Customer(): HasMany{
        return $this->hasMany(customerModelAdmin::class, 'user_id', 'id');
    }
}
