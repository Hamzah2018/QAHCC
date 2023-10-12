<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
            // return parent::toArray($request);
        return [
            'Employee No' => $this->id,
            "First NAME"=> $this->FIRSTNME,
            "Midle NAME"=> $this->MIDNAME,
            "Last NAME"=> $this->LASTNAME,
            "Department"=> $this->WORKDEPT,
            "Phone Number"=> $this->PHONENE,
            "HIREDATE"=> $this->HIREDATE,
            "JOB"=> "JOB",
            "EDLEVEL"=> $this->EDLEVEL,
            "SEX"=> $this->SEX,
            "BIRTHDATE"=> $this->BIRTHDATE,
            "SALARY"=> $this->SALARY,
            "BONUS"=> $this->BONUS,
            "COMM"=> $this->COMM,
            'Qualifiactions' => $this->qualifications
        ];
    }


}
