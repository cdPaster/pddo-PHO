<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provider extends Model
{
    protected $fillable = [
        'employee_no',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'profession',
        'specialty',
        'license_no',
        'contact_number',
        'email',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function encounters(): HasMany
    {
        return $this->hasMany(Encounter::class);
    }
}
