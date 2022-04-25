<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatusModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_status';

    public function project()
    {
        return $this->hasMany('App\Models\ProjectModel', 'project_status');
    }
}
