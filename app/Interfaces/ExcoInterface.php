<?php

namespace App\Interfaces;

use App\Models\Exco;
use Illuminate\Http\Request;
use App\Http\Requests\ExcoRequest;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\ExcoUpdateRequest;

interface ExcoInterface
{
    /**
     * Fetch all available excos for ui designs
     *
     * @method  GET 	/excos
     * @access  public
     */
    public function getExcos();

    /**
     * Create new Excos
     *
     * @method  POST 	/excos
     * @access  public
     * @return void
     */
    public function storeExcos(ExcoRequest $request);

    /**
     * Fetch Single Exco from db
     * @method  GET 	/excos/{id}
     * @access  public
     * @return void
     */
    public function getExcoById();

    /**
     * Update Exsisting Exco in db
     * @method  PATCH 	/excos/{id}/update
     * @access  public
     * @return void
     */
    public function updateExco(ExcoUpdateRequest $request, $excoId);

    /**
     * Destroy Exco from db
     * @method  DELETE 	/excos/{id}/delete
     * @access  public
     * @return void
     */
    public function deleteExco($excoId);
}
