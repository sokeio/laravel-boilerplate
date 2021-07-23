<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Role
 * @package App\Models
 * @version July 23, 2021, 5:54 pm UTC
 *
 * @property string $name
 * @property string $title
 * @property string $guard_name
 * @property string $description
 */
class Role extends Model
{
    use SoftDeletes;


    public $table = 'roles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'title',
        'guard_name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'title' => 'string',
        'guard_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
