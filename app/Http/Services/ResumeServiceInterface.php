<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.06.2020
 * Time: 8:08
 */

namespace App\Http\Services;


use App\Models\Resume;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface ResumeServiceInterface
{
    /**
     * @param int $id
     *
     * @throws \Exception
     * @return Resume
     */
    public function getResumeById(int $id): Resume;

    /**
     * @param int|null $id
     * @return Collection
     */
    public function getAllResumesByUserId(int $id = null): Collection;

    /**
     * @throws \Exception
     * @param array $resumeData
     * @return int
     */
    public function createResume(array $resumeData): int;

    /**
     * @throws \Exception
     * @param int $id
     * @param Request $request
     * @return int
     */
    public function updateResume(array $data, int $id): int;

    /**
     * @throws \Exception
     * @param int $id
     */
    public function softDeleteResume(int $id): void;

    /**
     * @throws \Exception
     * @param int $id
     */
    public function hardDeleteResume(int $id): void;


    public function getResumeByIdWithTrashed(int $id);

    public function restoreTrashed(int $id);
    public function getAllResumesWithTrashed();
    public function getResumeAuthor(int $id);
    public function download($resume);
    public function getFile(Request $request);


}