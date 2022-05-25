<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use App\Models\ProjectStatusModel;
use App\Models\ProjectTypeModel;
use App\Models\PreviewModel;
use App\Models\UnitModel;
use App\Models\FloorModel;
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
    private $Floor;

    public function __construct( ProjectModel $projectModel, ProjectTypeModel $projectTypeModel, ProjectStatusModel $ProjectStatus, UnitModel $unitModel, PreviewModel $previewModel, FloorModel $floorModel )
    {

        $this->Project       = $projectModel;
        $this->ProjectType   = $projectTypeModel;
        $this->ProjectStatus = $ProjectStatus;
        $this->Unit          = $unitModel;
        $this->Preview       = $previewModel;
        $this->Floor         = $floorModel;
        $this->access_token  = Utility::getAccessToken();

    }

    /**
     * Projects page
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index( Request $request )
    {
        $token       = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $projectList = $this->Project->getList( $request );
        $unit        = $this->Unit->getUpdate();
        $search      = $this->Project->getSearchOption();

        return view( 'projects', compact( 'projectList', 'unit', 'token', 'search' ) );
    }

    /**
     * Project Detail page
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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
        $layouts  = $this->Floor->getFloor( $project );

        return view( 'project_detail', compact( 'token', 'project', 'unitList', 'preview', 'relate', 'layouts' ) );
    }

    /**
     * Ajax filter project
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function project_filter( Request $request )
    {
        $token       = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $projectList = $this->Project->getProjectFilter( $request );
        if( $request->ajax() ){
            return response()->json( [
                                         'data' => view( 'partials.projects.list', compact( 'projectList', 'token' ) )->render(),
                                     ] );
        }

    }

}
