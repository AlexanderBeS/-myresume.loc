<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.06.2020
 * Time: 8:07
 */

namespace App\Http\Services;


use App\Http\Repositories\ResumeRepositoryInterface;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeService implements ResumeServiceInterface
{

    private $resumeRepository;

    public function __construct(ResumeRepositoryInterface $resumeRepository)
    {
        $this->resumeRepository = $resumeRepository;
    }

    /**
     * @param int $id
     *
     * @throws \Exception
     * @return Resume
     */
    public function getResumeById(int $id): Resume
    {
        return Resume::find($id);
    }

    /**
     * @param int|null $userId
     * @return Collection
     */
    public function getAllResumesByUserId(int $userId = null): Collection
    {
        return $this->resumeRepository->findAllByUserId($userId);
    }

    /**
     * @throws \Exception
     * @param array $resumeData
     * @return int
     */
    public function createResume(array $resumeData): int
    {
        // TODO: Implement createResume() method.
    }

    /**
     * @throws \Exception
     * @param int $id
     * @param Request $request
     * @return int
     */
    public function updateResume(Request $request, int $id): int
    {
        $fileName = null;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./storage', $fileName);
        }

        $resume = app()->make(Resume::class)->find($id);
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
            if(!is_null($fileName)) $resume->avatar = $fileName;
        $resume->save();

        return $resume->id;
    }

    /**
     * @throws \Exception
     * @param int $id
     */
    public function softDeleteResume(int $id): void
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();
    }

    /**
     *
     * @param int $id
     */
    public function hardDeleteResume(int $id): void
    {
        $resume = Resume::withTrashed()->find($id);
        $resume->forceDelete();
    }

    public function saveResume(Request $request)
    {
        $fileName = null;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./storage', $fileName);
        }

        $resume = new Resume();
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

    public function getResumeByIdWithTrashed(int $id)
    {
        return Resume::withTrashed()->find($id);
    }

    public function restoreTrashed(int $id)
    {
        try {
            $resume = Resume::withTrashed()
                ->find($id)
                ->restore();
            return true;
        } catch (\Exception $e){
            return false;
        }
    }

    public function getAllResumesWithTrashed()
    {
        return Resume::withTrashed()->get();
    }

    public function getResumeAuthor(int $id)
    {
        return User::find($id)->name;
    }


}