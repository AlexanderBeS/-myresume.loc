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
     * @param int|null $userId
     * @return Collection
     */
    public function getAllResumesByUserId(int $userId = null): Collection;

    /**
     * @throws \Exception
     * @param array $resumeData
     * @return int
     */
    public function createResume(array $resumeData): int;

    /**
     * @throws \Exception
     * @param int $id
     * @param array $resumeData
     * @return int
     */
    public function updateResume(int $id, array $resumeData): int;

    /**
     * @throws \Exception
     * @param int $id
     */
    public function softDeletePost(int $id): void;

    /**
     * @throws \Exception
     * @param int $id
     */
    public function hardDeletePost(int $id): void;
}