<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Attendance
 * @package App\Models
 * @version July 26, 2021, 12:17 pm UTC
 *
 * @property integer $user_id
 * @property integer $present
 * @property string $day
 * @property string $time_in
 * @property string $time_out
 */
class Attendance extends Model
{
    use SoftDeletes;


    public $table = 'attendances';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'ip',
        'present',
        'day',
        'time_in',
        'time_out'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ip' => 'string',
        'user_id' => 'integer',
        'present' => 'integer',
        'day' => 'date'
    ];

    protected $appends = array('user_name', 'day_text');
    public function getUserNameAttribute()
    {
        return $this->user->name;
    }
    public function getDayTextAttribute()
    {
        return $this->day->format('Y-m-d');
    }
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
