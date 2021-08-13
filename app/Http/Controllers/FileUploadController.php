<?php

namespace App\Http\Controllers;

use App\DataTables\FileUploadDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFileUploadRequest;
use App\Http\Requests\UpdateFileUploadRequest;
use App\Repositories\FileUploadRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FileUploadController extends AppBaseController
{
    /** @var  FileUploadRepository */
    private $fileUploadRepository;

    public function __construct(FileUploadRepository $fileUploadRepo)
    {
        $this->fileUploadRepository = $fileUploadRepo;
    }

    /**
     * Display a listing of the FileUpload.
     *
     * @param FileUploadDataTable $fileUploadDataTable
     * @return Response
     */
    public function index(FileUploadDataTable $fileUploadDataTable)
    {
        return $fileUploadDataTable->render('file_uploads.index');
    }

    /**
     * Show the form for creating a new FileUpload.
     *
     * @return Response
     */
    public function create()
    {
        return view('file_uploads.create');
    }

    /**
     * Store a newly created FileUpload in storage.
     *
     * @param CreateFileUploadRequest $request
     *
     * @return Response
     */
    public function store(CreateFileUploadRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('file_upload')) {
            $file_upload = $request->file('file_upload');
            $name = time() . '_' . $file_upload->getClientOriginalName();
            $filePath = $file_upload->storeAs('uploads', $name, 'public');
            $input['file_upload'] = $filePath;
        }
        $fileUpload = $this->fileUploadRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fileUploads.singular')]));

        return redirect(route('fileUploads.index'));
    }

    /**
     * Display the specified FileUpload.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fileUpload = $this->fileUploadRepository->find($id);

        if (empty($fileUpload)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fileUploads.singular')]));

            return redirect(route('fileUploads.index'));
        }

        return view('file_uploads.show')->with('fileUpload', $fileUpload);
    }

    /**
     * Show the form for editing the specified FileUpload.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fileUpload = $this->fileUploadRepository->find($id);

        if (empty($fileUpload)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fileUploads.singular')]));

            return redirect(route('fileUploads.index'));
        }

        return view('file_uploads.edit')->with('fileUpload', $fileUpload);
    }

    /**
     * Update the specified FileUpload in storage.
     *
     * @param  int              $id
     * @param UpdateFileUploadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileUploadRequest $request)
    {
        $fileUpload = $this->fileUploadRepository->find($id);

        if (empty($fileUpload)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fileUploads.singular')]));

            return redirect(route('fileUploads.index'));
        }
        $input = $request->all();
        if ($request->hasFile('file_upload')) {
            $file_upload = $request->file('file_upload');
            $name = time() . '_' . $file_upload->getClientOriginalName();
            $filePath = $file_upload->storeAs('uploads', $name, 'public');
            $input['file_upload'] = $filePath;
        }
        $fileUpload = $this->fileUploadRepository->update($input, $id);

        Flash::success(__('messages.updated', ['model' => __('models/fileUploads.singular')]));

        return redirect(route('fileUploads.index'));
    }

    /**
     * Remove the specified FileUpload from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fileUpload = $this->fileUploadRepository->find($id);

        if (empty($fileUpload)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fileUploads.singular')]));

            return redirect(route('fileUploads.index'));
        }

        $this->fileUploadRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fileUploads.singular')]));

        return redirect(route('fileUploads.index'));
    }
}
