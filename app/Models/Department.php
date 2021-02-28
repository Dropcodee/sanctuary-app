<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function excos()
    {
        return $this->hasMany(Member::class);
    }

    public function prospectives()
    {
        return $this->hasMany(Prospective::class);
    }
}
