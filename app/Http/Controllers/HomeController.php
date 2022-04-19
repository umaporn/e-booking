<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\UnitModel;

/**
 * Class SpaController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    private $Unit;
    private $Project;

    public function __construct( UnitModel $unitModel, ProjectModel $projectModel )
    {
        $this->Unit    = $unitModel;
        $this->Project = $projectModel;
    }

    public function index()
    {
        return view( 'home' );
    }

    public function homepage()
    {
        $project = $this->Project->getUpdate();
        $unit    = $this->Unit->getUpdate();

        return view( 'home', compact( 'unit' ,'project') );
    }
}
