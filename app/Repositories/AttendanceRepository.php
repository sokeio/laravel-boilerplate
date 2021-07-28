<?php

namespace App\Repositories;

use App\Models\Attendance;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
    public function TotalCheckInByDay($userId = null, $from = null, $to = null)
    {
        $query = $this->model->newQuery();
        if ($userId) {
            $query->where('user_id', $userId);
        }
        if ($from) {
            $query->where('day', '>=', $from);
        }
        if ($to) {
            $query->where('day', '<=', $to);
        }
        return $query->groupBy('day')->select('day', DB::Raw('count(0) as total'))->pluck('total', 'day');
    }
}
