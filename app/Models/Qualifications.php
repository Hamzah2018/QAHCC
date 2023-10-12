<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'QUAL_NAME',
        'MEMPNO',
        'YEAR_COMPLETED',
        'DESCRIPTION',
        'CERTIFICATE_NUMBER',
        'AWARDING_BODY',
    ];

    public function Employee()
    {
        return $this->belongTo(Employee::class,);
        // return $this->belongTo(Employee::class,'MEMPNO');
    }
   
}
