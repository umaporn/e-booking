<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use App\Models\ProjectStatusModel;
use App\Models\ProjectTypeModel;
use App\Models\PreviewModel;
use App\Models\UnitModel;
use Illuminate\Http\Request;
use App\Libraries\Utility;

/**
 * Class SpaController
 * @package App\Http\Controllers
 */
class ProjectsController extends Controller
{

    private $Project;
    private $ProjectType;
    private $ProjectStatus;
    private $Preview;
    private $Unit;
    private $access_token;

    public function __construct( ProjectModel $projectModel, ProjectTypeModel $projectTypeModel, ProjectStatusModel $ProjectStatus, UnitModel $unitModel, PreviewModel $previewModel )
    {

        $this->Project       = $projectModel;
        $this->ProjectType   = $projectTypeModel;
        $this->ProjectStatus = $ProjectStatus;
        $this->Unit          = $unitModel;
        $this->Preview       = $previewModel;
        $this->access_token  = Utility::getAccessToken();

    }

    public function index( Request $request )
    {
        $token       = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $projectList = $this->Project->getList( $request );
        $unit        = $this->Unit->getUpdate();

        return view( 'projects', compact( 'projectList', 'unit', 'token' ) );
    }

    public function detail( Request $request )
    {

        $token = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        if( $request->slug == null ){
            return redirect( route( 'projects.index' ) );
        }
        $project  = $this->Project->getProjectDetail( $request->slug );
        $unitList = $this->Unit->getUnitList( $request, $project );
        $preview  = $this->Preview->getUpdate();
        $relate   = $this->Project->getRelate( $project );

        return view( 'project_detail', compact( 'token', 'project', 'unitList', 'preview', 'relate' ) );
    }

}
