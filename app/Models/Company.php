<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'address',
        'industry',
        'email',
        'phone',
        'website',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}