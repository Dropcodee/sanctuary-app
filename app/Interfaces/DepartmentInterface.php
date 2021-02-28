<?php

namespace App\Interfaces;

use App\Http\Requests\DepartmentRequest;
use Illuminate\Http\Request;

interface DepartmentInterface
{

    /**
     * Get all departments
     *
     * @method  GET 	/departments
     * @access  public
     */
    public function getDepartments();

    /**
     * Get Department By ID
     *
     * @param   integer     $id
     *
     * @method  GET 	/departments/{id}
     * @access  public
     */
    public function getDepartmentById($id);

    /**
     * Create department
     *
     * @param   \App\Http\Requests\DepartmentRequest    $request
     *
     * @method  POST    /departments       For Create
     * @access  public
     */
    public function createDepartment(DepartmentRequest $request);

    /**
     * Update department
     *
     * @param   integer                           $id
     * @method  PATCH    /departments/{id}       For Update
     * @access  public
     */
    public function updateDepartment(Request $request, $id);

    /**
     * Delete department
     *
     * @param   integer     $id
     *
     * @method  DELETE  /departments/{id}
     */
    public function deleteDepartment($id);
}
