<?php

namespace App\Http\Controllers;

use App\Models\PreviewModel;
use App\Models\ProjectModel;
use App\Models\ProjectTypeModel;
use App\Models\UnitModel;
use App\Models\BannerModel;
use App\Libraries\Utility;
use Illuminate\Http\Request;

/**
 * Class SpaController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    private $Unit;
    private $Project;
    private $Preview;
    private $Banner;
    private $ProjectType;
    private $access_token;

    public function __construct( UnitModel $unitModel, ProjectModel $projectModel, PreviewModel $previewModel, BannerModel $bannerModel, ProjectTypeModel $projectTypeModel )
    {
        $this->Unit         = $unitModel;
        $this->Project      = $projectModel;
        $this->Preview      = $previewModel;
        $this->Banner       = $bannerModel;
        $this->ProjectType  = $projectTypeModel;
        $this->access_token = Utility::getAccessToken();
    }

    /**
     * Home page display
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function homepage()
    {
        $token       = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $banner      = $this->Banner->getBanner();
        $projectType = $this->ProjectType->getTypeList();
        $preview     = $this->Preview->getUpdate();
        $project     = $this->Project->getUpdate();
        $option      = $this->Project->getSearchOption();
        $unit        = $this->Unit->getUpdate();

        $propertyList = $this->Project->project_property();
        foreach( $propertyList as $item ){
            $unitProperty = $this->Unit->getUnitProperty( $item );
            $item->setAttribute( 'unit_property', $unitProperty );
        }

        return view( 'home', compact( 'unit', 'project', 'preview', 'propertyList', 'banner', 'projectType', 'option', 'token' ) );
    }

    public function search( $project, $type, $location, $unit, $price )
    {
        dd( [ $project, $type, $location, $unit, $price ] );
    }
    /**
     * Get Search option home page
     *
     * @return false|string
     */
    public function searchOption( Request $request )
    {
        $option = $this->Project->getSearchOption( $request->project, $request->type, $request->unit, $request->location );

        return json_encode( $option, true );
    }

}
