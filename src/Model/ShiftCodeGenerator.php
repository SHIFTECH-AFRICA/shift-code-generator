<?php


namespace ShiftechAfrica\CodeGenerator\Model;

use Illuminate\Database\Eloquent\Model;
use ShiftechAfrica\CodeGenerator\Traits\Uuids;

class ShiftCodeGenerator extends Model
{
    use Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    //set attributes
    protected $guarded = [];
}
