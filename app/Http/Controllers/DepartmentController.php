<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\DepartmentInterface;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    protected $departmentInterface;

    /**
     * Create a new constructor for this controller
     */
    public function __construct(DepartmentInterface $departmentInterface)
    {
        $this->departmentInterface = $departmentInterface;
    }

    /**
     * Fetch all available departments
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->departmentInterface->getDepartments();
        return view('dash.department.departments', ['departments' => $departments]);
    }

    /**
     * Create a new Department
     * @param  	Object|Array 		Request $request
     * @return 	JSON Object			$department
     */
    public function store(DepartmentRequest $request)
    {
        // dd($request);
        $requestResponse = $this->departmentInterface->createDepartment($request);
        if (!$requestResponse) {
            return dd($requestResponse);
        }
        // dd($requestResponse);
        return redirect()->route('departments');
    }

    public function update(Request $request, $departmentId)
    {
        $requestResponse = $this->departmentInterface->updateDepartment($request, $departmentId);
        if (!$requestResponse) {
            return dd($requestResponse);
        }
        return redirect()->route('departments');
    }
    public function destroy($departmentId)
    {
        $requestResponse = $this->departmentInterface->deleteDepartment($departmentId);
        if (!$requestResponse) {
            return dd($requestResponse);
        }
        return redirect()->route('departments');
    }
}
