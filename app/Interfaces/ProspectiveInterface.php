<?php

namespace App\Interfaces;

use App\Http\Requests\ProspectiveRequest;

interface ProspectiveInterface
{
    /**
     * Get all prospectives
     *
     * @method  GET /prospectives
     * @access  public
     */
    public function getProspectives();

    /**
     * Get prospective By ID
     *
     * @param   integer     $id
     *
     * @method  GET /prospectives/{$id}
     * @access  public
     */
    public function getSingleProspective($id);

    /**
     * Create Prospective members
     *
     * @param   \App\Http\Requests\ProspectiveRequest    $request
     *
     * @method  POST    /prospectives       For Create
     * @access  public
     */
    public function storeProspectives(ProspectiveRequest $request);

    /**
     * Accept Prospective Member application
     *
     * @param   integer   $id
     *
     * @method  PATCH     /prospectives/{id}/accept
     * @return  void
     *
     * @access public
     */
    public function acceptProspectives($id);

    /**
     * Reject prospective member application
     *
     * @param   integer     $id
     *
     * @method  DELETE  /prospectives/{id}/reject
     * @access  public
     */
    public function rejectProspectives($id);
}
