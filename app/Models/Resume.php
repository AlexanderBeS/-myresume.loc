<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resume extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'content',
        'user_id',
        'position',
        'city',
        'employment_type',
        'salary',
        'job_category',
        'experience',
        'last_job',
        'job_date_start',
        'job_date_finish',
        'duties',
        'no_experience',
        'education_lvl',
        'type_education_lvl',
        'institution',
        'education_date_start',
        'education_date_finish',
        'resume_visibility',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
