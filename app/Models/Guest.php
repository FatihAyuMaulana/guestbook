<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'fulname',
        'institutions_id',
        'from',
        'phonenumber',
        'email',
        'note'
    ];

    public function institution()
    {
        $this->belongsTo(Institution::class);
    }
}
