<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectLocationModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_location';

    public function projectLocation()
    {
        return $this->hasMany( 'App\Models\ProjectModel', 'project_location' );
    }

    /**
     * Get id for search box
     *
     * @param string $location
     *
     * @return mixed
     */
    public static function getLocationId( string $location )
    {
        return ProjectLocationModel::where( 'location_name_english', $location )
                                   ->orWhere( 'location_name_thai', $location )->first();
    }

}
