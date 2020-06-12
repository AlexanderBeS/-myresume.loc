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
     * @param int $id
     */
    public function softDeleteResume(int $id): void;

    /**
     * @param int $id
     */
    public function hardDeleteResume(int $id): void;

    /**
     * @param int $id
     * @return mixed
     */
    public function getResumeByIdWithTrashed(int $id);

    /**
     * @param int $id
     * @return bool
     */
    public function restoreTrashed(int $id);

    /**
     * @return mixed
     */
    public function getAllResumesWithTrashed();

    /**
     * @param int $id
     * @return string
     */
    public function getResumeAuthor(int $id);

    /**
     * @param Resume $resume
     * @throws \Mpdf\MpdfException
     * @throws \Throwable
     */
    public function download(Resume $resume);

    /**
     * @param Request $request
     * @return null|string
     */
    public function getFile(Request $request);


}