<?php

namespace App\Repositories;

use App\Models\Attendance;
use App\Repositories\BaseRepository;
use Carbon\Carbon;

/**
 * Class AttendanceRepository
 * @package App\Repositories
 * @version July 26, 2021, 12:17 pm UTC
 */

class AttendanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'present',
        'day',
        'time_in',
        'time_out'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Attendance::class;
    }

    public function CountUserOnline()
    {
        $checkTime = Carbon::now()->copy()->subMinutes(config('fast.time_checkout'));
        $query = $this->allQuery();

        return $query->where('present', 1)->where('time_out', '>=', $checkTime)->count();
    }
}
