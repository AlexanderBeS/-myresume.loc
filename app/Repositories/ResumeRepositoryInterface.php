<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.06.2020
 * Time: 8:08
 */

namespace App\Repositories;


use App\Models\Resume;

interface ResumeRepositoryInterface
{
    public function findAllByUserId(int $userId);
    public function saveResume(Resume $resume, array $data);
    public function updateResume(Resume $resume, array $data);
}