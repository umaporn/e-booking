<?php
/**
 * Unit controller
 */

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use App\Models\ProjectStatusModel;
use App\Models\ProjectTypeModel;
use App\Models\UnitModel;
use App\Libraries\Utility;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    private $Project;
    private $ProjectType;
    private $ProjectStatus;
    private $Unit;
    private $access_token;

    public function __construct( ProjectModel $projectModel, ProjectTypeModel $projectTypeModel, ProjectStatusModel $ProjectStatus, UnitModel $unitModel )
    {
        $this->Project       = $projectModel;
        $this->ProjectType   = $projectTypeModel;
        $this->ProjectStatus = $ProjectStatus;
        $this->Unit          = $unitModel;
        $this->access_token  = Utility::getAccessToken();
    }

    /**
     * Show how to unit page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to unit page
     */
    public function index( Request $request )
    {
        $token   = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $project = $this->Project->getUpdate( 3 );
        $unit    = $this->Unit->getList( $request, 6 );

        return view( 'unit', compact( 'project', 'unit', 'token' ) );
    }

    /**
     * Unit detail page
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function detail( $id, $slug )
    {
        if( !isset( $id ) ){
            dd( '404' );
        }

        $token   = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $unit    = $this->Unit->getUnitInfo( $id );
        $project = $this->Project->getUpdate( 3 );
        $relate  = $this->Unit->getUnitRelate( $id, $unit[0]->project_info, 4 );

        // dd( $unit );

        return view( 'unit_detail', compact( 'token', 'unit', 'project', 'relate' ) );

    }
}
