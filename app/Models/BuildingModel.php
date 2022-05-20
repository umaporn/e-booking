<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingModel extends Model
{
    /** @var string Table name */
    protected $table = 'building_layout';

    public function project()
    {
        return $this->belongsTo( 'App\Models\ProjectModel', 'building_layout_id' );
    }

}
