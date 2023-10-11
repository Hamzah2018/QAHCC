<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeesResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use ApiResponseTrait;
    public function index()
    {
        //
        $employees = EmployeesResource::collection(Employee::get());
        return $this->apiResponse($employees,'ok',200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'FIRSTNME'=> 'required|max:255',
            'MIDNAME' =>'required|max:255',
            'LASTNAME' =>'required|max:255',
            'EDLEVEL' =>'required|max:2',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors('The Employee Not Save'),400);
        }
        $employee = Employee::create($request->all());
        if($employee){
            return $this->apiResponse(new EmployeesResource($employee),'Saved',201);
        }
        return $this->apiResponse(null,'This Employee Not Save',401);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        if($employee){
            return $this->apiResponse(new EmployeesResource($employee),'ok',200);
        }
        return $this->apiResponse(null,'This Employee Not Found',400);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'FIRSTNME'=> 'required|max:255',
            'MIDNAME' =>'required|max:255',
            'LASTNAME' =>'required|max:255',
            'EDLEVEL' =>'required|max:2',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors('The Employee Not Update'),400);
        }

        $employee = Employee::find($id);
        if(!$employee){
            return $this->apiResponse(null,'This Employee Not Found',400);
        }
        $employee->update($request->all());
        if($employee){
            return $this->apiResponse(new EmployeesResource($employee),'Update',201);
        }
        return $this->apiResponse(null,'This Employee Not Found',400);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if(!$employee){
            return $this->apiResponse(null,'This Employee Not Found',404);
        }
        $employee->delete($id);
        if($employee){
            return $this->apiResponse(new EmployeesResource($employee),'deleted',200);
        }
    }
}
