<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.06.2020
 * Time: 8:08
 */

namespace App\Repositories;


use App\Models\Resume;
use Illuminate\Support\Facades\Auth;

class ResumeRepository implements ResumeRepositoryInterface
{

    /**
     * @param int $userId
     * @return Resume[]|\Illuminate\Database\Eloquent\Collection
     */
    public function findAllByUserId(int $userId)
    {
        $resumes = Resume::all()->where('user_id', $userId);

        return $resumes;
    }

    /**
     * @param Resume $resume
     * @param array $data
     */
    public function saveResume(Resume $resume, array $data)
    {
        $resume->position = $data['position'];
        $resume->city = $data['city'];
        $resume->employment_type = $data['employment_type'];
        $resume->salary = $data['salary'];
        $resume->job_category = $data['job_category'];
        $resume->experience = $data['experience'];
        $resume->last_job = $data['last_job'];
        $resume->job_date_start = $data['job_date_start'];
        $resume->job_date_finish = $data['job_date_finish'];
        $resume->duties = $data['duties'];

        (isset($data['no_experience']))? $resume->no_experience = $data['no_experience'] : null;

        $resume->education_lvl = $data['education_lvl'];
        $resume->type_education_lvl = $data['type_education_lvl'];
        $resume->institution = $data['institution'];
        $resume->education_date_start = $data['education_date_start'];
        $resume->education_date_finish = $data['education_date_finish'];
        $resume->resume_visibility = $data['resume_visibility'];
        $resume->avatar = $data['avatar'];
        $resume->user_id = Auth::id();
        $resume->save();
    }

    /**
     * @param Resume $resume
     * @param array $data
     */
    public function updateResume(Resume $resume, array $data)
    {
        $resume->position = $data['position'];
        $resume->city = $data['city'];
        $resume->employment_type = $data['employment_type'];
        $resume->salary = $data['salary'];
        $resume->job_category = $data['job_category'];
        $resume->experience = $data['experience'];
        $resume->last_job = $data['last_job'];
        $resume->job_date_start = $data['job_date_start'];
        $resume->job_date_finish = $data['job_date_finish'];
        $resume->duties = $data['duties'];

        (isset($data['no_experience']))? $resume->no_experience = $data['no_experience'] : null;

        $resume->education_lvl = $data['education_lvl'];
        $resume->type_education_lvl = $data['type_education_lvl'];
        $resume->institution = $data['institution'];
        $resume->education_date_start = $data['education_date_start'];
        $resume->education_date_finish = $data['education_date_finish'];
        $resume->resume_visibility = $data['resume_visibility'];
        if(!is_null($data['avatar'])) $resume->avatar = $data['avatar'];
        $resume->save();
    }


}