<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QualifiactionsResource extends JsonResource
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
            'Qualifiaction No' => $this->id,
            "Qualifiaction NAME"=> $this->QUAL_NAME,
            "Employee No"=> $this->EMPNO,
            "YEAR COMPLETED"=> $this->YEAR_COMPLETED,
            "Description "=> $this->DESCRIPTION,
            "Certificate Number"=> $this->CERTIFICATE_NUMBER,
            "AWARDING BODY"=> $this->AWARDING_BODY,
        ];
    }
 

}
