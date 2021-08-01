<?php

namespace App\DataTables;

use App\Models\Attendance;
use App\Models\User;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class AttendanceDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'attendances.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Attendance $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Attendance $model)
    {
        return $model->newQuery()->with('user');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('datatables.bAction')])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner','title' => __('datatables.bcreate')],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner','title' => __('datatables.bexport')],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner','title' => __('datatables.bprint')],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner','title' => __('datatables.breset')],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner','title' => __('datatables.breload')],
                ],
                'language' => __('datatables')
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => ['searchable' => false],
            'ip',
            'user_name' => ['title' => __('models/attendances.fields.user_id'), 'data' => 'user_name', 'name' => 'user.name'],
            'present' => ['title' => __('models/attendances.fields.user_id')],
            'day' => ['title' => __('models/attendances.fields.day'), 'data' => 'day_text', 'name' => 'day'],
            'time_in' => ['title' => __('models/attendances.fields.time_in')],
            'time_out' => ['title' => __('models/attendances.fields.time_out')]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'attendances_datatable_' . time();
    }
}
