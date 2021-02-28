<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ExcoInterface;
use App\Http\Requests\ExcoRequest;
use App\Interfaces\DepartmentInterface;

class ExcoController extends Controller
{
    protected $excoInterface;
    protected $departmentInterface;

    /**
     * Create a new constructor for this controller
     */
    public function __construct(ExcoInterface $excoInterface, DepartmentInterface $departmentInterface)
    {
        $this->excoInterface = $excoInterface;
        $this->departmentInterface = $departmentInterface;
    }

    /**
     * Fetch all available excos from db
     *
     * @param       empty       no params
     * @method      POST        /excos
     * @return      view        excos.blade.php[excos, departments]
     */
    public function index()
    {
        $excos = $this->excoInterface->getExcos();
        $departments = $this->departmentInterface->getDepartments();
        return view('dash.excos.excos')->with(['excos' => $excos, 'departments' => $departments]);
    }

    /**
     * create new excos
     * @method   public            store()
     * @param   ExcoRequest     $request
     * @return redirect         excos.blade.php[excos]
     */
    public function store(ExcoRequest $request)
    {
        $requestResponse = $this->excoInterface->storeExcos($request);
        if (!$requestResponse) {
            return dd($requestResponse);
        }
        return redirect()->route('excos');
    }
}
