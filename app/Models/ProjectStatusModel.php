<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatusModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_status';

    public function project()
    {
        return $this->hasMany( 'App\Models\ProjectModel', 'project_status' );
    }

    /**
     * Get status info by name
     *
     * @param string $strStatus
     *
     * @return mixed
     */
    public static function getStatusID( string $strStatus )
    {
        return ProjectStatusModel::where( 'name_english', $strStatus )
                                 ->orWhere( 'name_thai', $strStatus )
                                 ->orderBy( 'id', 'desc' )
                                 ->first();
    }
}
