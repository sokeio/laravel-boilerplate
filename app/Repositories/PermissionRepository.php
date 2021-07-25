<?php

namespace App\Repositories;

use App\Models\Permission;
use App\Repositories\BaseRepository;

/**
 * Class PermissionRepository
 * @package App\Repositories
 * @version July 23, 2021, 4:50 pm UTC
 */

class PermissionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'title',
        'guard_name',
        'description',
        'module'
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
        return Permission::class;
    }
    public function checkExists($name, $guard_name)
    {
        return $this->allQuery([
            'name' => $name,
            'guard_name' => $guard_name
        ])->count() > 0;
    }
    public function getListByName($name, $guard_name = 'web')
    {
        return $this->allQuery([
            'guard_name' => $guard_name
        ])->where('name', 'like', $name)->get();
    }
}
