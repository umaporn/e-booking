<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PreviewModel;
use App\Models\ProjectModel;
use App\Models\ProjectTypeModel;
use App\Models\UnitModel;
use App\Models\BannerModel;


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

    public function __construct( UnitModel $unitModel, ProjectModel $projectModel, PreviewModel $previewModel, BannerModel $bannerModel, ProjectTypeModel $projectTypeModel )
    {
        $this->Unit        = $unitModel;
        $this->Project     = $projectModel;
        $this->Preview     = $previewModel;
        $this->Banner      = $bannerModel;
        $this->ProjectType = $projectTypeModel;
    }

    public function index()
    {
        return view( 'home' );
    }

    public function homepage()
    {

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

        return view( 'home', compact( 'unit', 'project', 'preview', 'propertyList', 'banner', 'projectType' ) );
    }
}
