<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\ProjectStatusModel;
use App\Models\ProjectTypeModel;
use Illuminate\Http\Request;

/**
 * Class SpaController
 * @package App\Http\Controllers
 */
class ProjectController extends Controller
{

    private $Project;
    private $ProjectType;
    private $ProjectStatus;

    public function __construct( ProjectModel $projectModel, ProjectTypeModel $projectTypeModel, ProjectStatusModel $ProjectStatus )
    {

        $this->Project       = $projectModel;
        $this->ProjectType   = $projectTypeModel;
        $this->ProjectStatus = $ProjectStatus;
    }

    public function index( Request $request )
    {
        $projectList = $this->Project->getList( $request );
    }

}
