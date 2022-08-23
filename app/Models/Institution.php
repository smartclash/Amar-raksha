<?php

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'latitude',
        'longitude'
    ];

    public function admins()
    {
        return $this->hasMany(User::class)->where([
            'role' => Role::INSTITUTION->value
        ]);
    }
}
