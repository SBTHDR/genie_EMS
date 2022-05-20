<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['checkin', 'checkout', 'office_hours', 'user_id', 'date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
