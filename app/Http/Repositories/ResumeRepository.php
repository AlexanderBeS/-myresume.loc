<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.06.2020
 * Time: 8:08
 */

namespace App\Http\Repositories;


use App\Models\Resume;

class ResumeRepository implements ResumeRepositoryInterface
{
    public function findById(int $id)
    {
        // TODO: Implement findById() method.
        Resume::findOrFail($id);
    }

    public function findByUserId(int $id)
    {
        // TODO: Implement findByUserId() method.
        $resumes = Resume::all()->where('user_id', Auth::id());
    }

    public function softDelete(int $id)
    {
        // TODO: Implement softDelete() method.
        $resume->delete();
    }

    public function hardDelete(int $id)
    {
        // TODO: Implement hardDelete() method.
        $resume->forceDelete();
    }

    public function findWithTrashed(int $id)
    {
        // TODO: Implement findWithTrashed() method.
        Resume::withTrashed()
            ->where('id', $id);
    }

    public function restoreTrashed(int $id)
    {
        // TODO: Implement restoreTrashed() method.
        Resume::withTrashed()
            ->where('id', $id)
            ->restore();
    }

    public function saveResume(Resume $resume, array $data)
    {
        $resume->position = $request->get('position');
        $resume->city = $request->get('city');
        $resume->employment_type = $request->get('employment_type');
        $resume->salary = $request->get('salary');
        $resume->job_category = $request->get('job_category');
        $resume->experience = $request->get('experience');
        $resume->last_job = $request->get('last_job');
        $resume->job_date_start = $request->get('job_date_start');
        $resume->job_date_finish = $request->get('job_date_finish');
        $resume->duties = $request->get('duties');
        $resume->no_experience = $request->get('no_experience');
        $resume->education_lvl = $request->get('education_lvl');
        $resume->type_education_lvl = $request->get('type_education_lvl');
        $resume->institution = $request->get('institution');
        $resume->education_date_start = $request->get('education_date_start');
        $resume->education_date_finish = $request->get('education_date_finish');
        $resume->resume_visibility = $request->get('resume_visibility');
        $resume->avatar = $fileName;
        $resume->user_id = Auth::id();
        $resume->save();
    }


}