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
     * @return Resume
     *
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
     * @param array $data
     * @return int
     */
    public function createResume(array $data): int
    {
        $resume = new Resume();
        $this->resumeRepository->saveResume($resume, $data);

        return $resume->id;
    }

    /**
     * @param array $data
     * @param int $id
     * @return int
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function updateResume(array $data, int $id): int
    {

        $resume = app()->make(Resume::class)->find($id);
        $this->resumeRepository->updateResume($resume, $data);

        return $resume->id;
    }

    /**
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

    /**
     * @param Request $request
     * @return null|string
     */
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

    /**
     * @param int $id
     * @return Resume|Resume[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Builder[]|\Illuminate\Support\Collection|mixed|null
     */
    public function getResumeByIdWithTrashed(int $id)
    {
        return Resume::withTrashed()->find($id);
    }

    /**
     * @param int $id
     * @return bool
     */
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

    /**
     * @return Resume[]|\Illuminate\Database\Eloquent\Builder[]|Collection|\Illuminate\Database\Query\Builder[]|\Illuminate\Support\Collection
     */
    public function getAllResumesWithTrashed()
    {
        return Resume::withTrashed()->get();
    }

    /**
     * @param int $id
     * @return string
     */
    public function getResumeAuthor(int $id)
    {
        return User::find($id)->name;
    }

    /**
     * @param Resume $resume
     * @throws \Mpdf\MpdfException
     * @throws \Throwable
     */
    public function download(Resume $resume)
    {
        $template = view('resumes.pdf', compact('resume'));

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($template->render());
        $mpdf->Output();
    }


}