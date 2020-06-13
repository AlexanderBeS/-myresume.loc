<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = Resume::all();
        return $this->sendResponse($resumes->toArray(), 'Resumes retrieved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resume = Resume::find($id);
        if (is_null($resume)) {
            return $this->sendError('Resume not found.');
        }
        return $this->sendResponse($resume->toArray(), 'Resume retrieved successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resume = Resume::withTrashed()->findOrFail($id);
        $resume->forceDelete();
        if (is_null($resume)) {
            return $this->sendError('Resume not found.');
        }
        return $this->sendResponse($resume->toArray(), 'Resume deleted successfully.');
    }
}
