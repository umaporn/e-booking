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

}
