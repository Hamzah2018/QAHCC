<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QualifiactionsResource;
use App\Models\Qualifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class QualificationsController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $qualifications = QualifiactionsResource::collection(Qualifications::get());
        return $this->apiResponse($qualifications,'ok',200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            // 'QUAL_NAME'=> 'required|max:255',
            // 'EMPNO' =>'required|max:255',
            // 'YEAR_COMPLETED' =>'required|max:255',
            // 'DESCRIPTION' =>'required|max:555',
            // 'CERTIFICATE_NUMBER' =>'required|max:255',
            // 'AWARDING_BODY' =>'required|max:555',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors('The Qualification Not Save'),400);
        }
        $qualification = Qualifications::create($request->all());
        if($qualification){
            return $this->apiResponse(new QualifiactionsResource($qualification),'Saved',201);
        }
        return $this->apiResponse(null,'This Qualification Not Save',401);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $qualifications= Qualifications::find($id);
        if($qualifications){
            return $this->apiResponse(new QualifiactionsResource($qualifications),'ok',200);
        }
        return $this->apiResponse(null,'This Qualifications Not Found',400);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            // 'FIRSTNME'=> 'required|max:255',
            // 'MIDNAME' =>'required|max:255',
            // 'LASTNAME' =>'required|max:255',
            // 'EDLEVEL' =>'required|max:2',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors('The Qualification Not Update'),400);
        }

        $qualification = Qualifications::find($id);
        if(!$qualification){
            return $this->apiResponse(null,'This Qualification Not Found',400);
        }
        $qualification->update($request->all());
        if($qualification){
            return $this->apiResponse(new QualifiactionsResource($qualification),'Update',201);
        }
        return $this->apiResponse(null,'This Qualifiaction Not Found',400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $qualification = Qualifications::find($id);
        if(!$qualification){
            return $this->apiResponse(null,'This Employee Not Found',404);
        }
        $qualification->delete($id);
        if($qualification){
            return $this->apiResponse(new QualifiactionsResource($qualification),'deleted',200);
        }
    }
}
