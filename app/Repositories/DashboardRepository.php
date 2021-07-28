<?php

namespace App\Repositories;

use App\Models\Attendance;
use Carbon\Carbon;

/**
 * Class DashboardRepository
 * @package App\Repositories
 * @version July 26, 2021, 12:17 pm UTC
 */

class DashboardRepository
{
    /** @var  UserRepository */
    private $userRepository;
    /** @var  RoleRepository */
    private $roleRepository;
    /** @var  PermissionRepository */
    private $permissionRepository;
    /** @var  AttendanceRepository */
    private $attendanceRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RoleRepository $roleRepo, UserRepository $userRepo, PermissionRepository $permissionRepo, AttendanceRepository $attendanceRepo)
    {
        $this->permissionRepository = $permissionRepo;
        $this->userRepository = $userRepo;
        $this->roleRepository = $roleRepo;
        $this->attendanceRepository = $attendanceRepo;
    }

    private function getDashboardInfo()
    {
        $dashboardInfo = [];
        $dashboardInfo['user_count'] =  $this->userRepository->count();
        $dashboardInfo['role_count'] =  $this->roleRepository->count();
        $dashboardInfo['permission_count'] =  $this->permissionRepository->count();
        $dashboardInfo['user_online'] =  $this->attendanceRepository->CountUserOnline();
        return $dashboardInfo;
    }

    public function GetData()
    {
        $dashboard = [];
        $dashboard['dashboardInfo'] = $this->getDashboardInfo();
        return $dashboard;
    }
}
