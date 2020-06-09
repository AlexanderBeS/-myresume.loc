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
use Illuminate\Database\Eloquent\Collection;

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
        // TODO: Implement getResumeById() method.
    }

    /**
     * @param int|null $userId
     * @return Collection
     */
    public function getAllResumesByUserId(int $userId = null): Collection
    {
        // TODO: Implement getAllResumesByUserId() method.
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
     * @param array $resumeData
     * @return int
     */
    public function updateResume(int $id, array $resumeData): int
    {
        // TODO: Implement updateResume() method.
    }

    /**
     * @throws \Exception
     * @param int $id
     */
    public function softDeletePost(int $id): void
    {
        // TODO: Implement softDeletePost() method.
    }

    /**
     * @throws \Exception
     * @param int $id
     */
    public function hardDeletePost(int $id): void
    {
        // TODO: Implement hardDeletePost() method.
    }
}