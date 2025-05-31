<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class employeeModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = [
        'firstName',
        'lastname',
        'gender',
        'email',
        'phoneNumber',
        'position',
        'hireDate',
        'salary'
    ];

    public function Order(): HasMany{
        return $this->hasMany(orderModelAdmin::class, 'employee_id', 'id');
    }
}
