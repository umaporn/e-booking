<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitLayoutModel extends Model
{
    /** @var string Table name */
    protected $table = 'unit_layout';

    public function floor()
    {
        return $this->belongsTo( 'App\Models\FloorModel', 'floor_layout_link' );
    }

}
