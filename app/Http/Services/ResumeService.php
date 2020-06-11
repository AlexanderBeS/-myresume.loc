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
    public function createResume(array $data): int
    {
        $resume = new Resume();
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

        return $resume->id;
    }

    /**
     * @throws \Exception
     * @param int $id
     * @param Request $request
     * @return int
     */
    public function updateResume(array $data, int $id): int
    {
        $resume = app()->make(Resume::class)->find($id);
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

    public function getFile(Request $request)
    {
        $fileName = null;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./storage', $fileName);
        }

        return $fileName;
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

    public function download($resume)
    {
        $template = view('resumes.pdf', compact('resume'));

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($template->render());
        $mpdf->Output();
    }


}