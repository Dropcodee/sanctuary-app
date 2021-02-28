<?php

namespace App\Repositories;

use App\Http\Requests\DepartmentRequest;
use App\Interfaces\DepartmentInterface;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class DepartmentRepository implements DepartmentInterface
{

    public function getDepartments()
    {
        return Department::orderBy('name', 'desc')->get();
    }

    public function createDepartment(DepartmentRequest $request)
    {
        // dd($request->dept_name);
        DB::beginTransaction();
        try {
            $department = Department::create([
                'name' => trim($request['dept_name']),
                'college' => trim($request['dept_college']),
            ]);
            DB::commit();
            return $department;
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }
    public function getDepartmentById($id)
    {
        return Department::findOrFail($id);
    }

    public function updateDepartment($request, $id)
    {
        DB::beginTransaction();
        try {
            $department = Department::findOrFail($id);
            # Update the department
            $department->update([
                'name' => trim($request->dept_name),
                'college' => trim($request->dept_college),
            ]);
            DB::commit();
            return $department;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function deleteDepartment($id)
    {
        try {
            $department = Department::findOrFail($id)->delete();
            return $department;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
