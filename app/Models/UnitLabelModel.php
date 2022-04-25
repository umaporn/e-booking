<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitLabelModel extends Model
{
    /** @var string Table name */
    protected $table = 'unit_label';

    public function unit()
    {
        return $this->hasMany( 'App\Models\UnitModel', 'select_unit_label' );
    }
}
