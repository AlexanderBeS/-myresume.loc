<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.06.2020
 * Time: 8:08
 */

namespace App\Http\Repositories;


use App\Models\Resume;

interface ResumeRepositoryInterface
{
    public function findById(int $id);
    public function findByUserId(int $id);
    public function softDelete(int $id);
    public function hardDelete(int $id);
    public function findWithTrashed(int $id);
    public function restoreTrashed(int $id);
    public function saveResume(Resume $resume, array $data);


}