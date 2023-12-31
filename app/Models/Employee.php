<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'FIRSTNME',
        'MIDNAME',
        'LASTNAME',
        'EDLEVEL',
    ];

    public function qualifications()
    {
        return $this->hasMany(Qualifications::class,'EMPNO');
    }
}
