<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid_member extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
