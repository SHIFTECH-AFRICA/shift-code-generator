<?php


namespace ShiftechAfrica\CodeGenerator\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ShiftechAfrica\CodeGenerator\Traits\Uuids;

class ShiftCodeGenerator extends Model
{
    use Uuids, HasFactory;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * type of auto-increment
     *
     * @string
     */
    protected $keyType = 'string';

    //set attributes
    protected $guarded = [];
}
