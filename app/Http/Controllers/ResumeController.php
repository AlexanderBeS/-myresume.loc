<?php

namespace App\Http\Controllers;

use App\Http\Services\ResumeServiceInterface;
use App\Models\Resume;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /** @var ResumeServiceInterface */
    private $resumeService;

    public function __construct(ResumeServiceInterface $resumeService)
    {
        $this->resumeService = $resumeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = $this->resumeService->getAllResumesByUserId(Auth::id());

        return view('resumes.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        try {
            $this->validate($request, [
                'position' => 'required',
                'city' => 'required',
                'employment_type' => 'required',
                'salary' => 'sometimes|integer|nullable',
                'job_category' => 'required',
                'experience' => 'sometimes|string|nullable',
                'last_job' => 'sometimes|string|nullable',
                'job_date_start' => 'sometimes|date|nullable',
                'job_date_finish' => 'sometimes|date|after:job_date_start|nullable',
                'duties' => 'sometimes|string|nullable',
                'resume_visibility' => 'required|integer',
                'no_experience' => 'sometimes|integer|nullable',
                'education_lvl'=> 'sometimes|string|nullable',
                'type_education_lvl'=> 'integer|nullable',
                'institution'=> 'sometimes|string|nullable',
                'education_date_start'=> 'sometimes|date|nullable',
                'education_date_finish'=> 'sometimes|date|after:education_date_start|nullable',
                'avatar'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|nullable',
            ]);

            $data = $request->all();
            $data['avatar'] = $this->resumeService->getFile($request);
            $this->resumeService->createResume($data);

            return redirect(route('resumes.index'));

//        } catch (\Exception $e) {
//            //dd($e->getMessage());
//            return redirect(route('resumes.create'));
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resume = $this->fetchResumeOrFail($id);

        return view('resumes.show', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resume = $this->fetchResumeOrFail($id);

        return view('resumes.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validate = $this->validate($request, [
                'position' => 'required',
                'city' => 'required',
                'employment_type' => 'required',
                'salary' => 'sometimes|integer|nullable',
                'job_category' => 'required',
                'experience' => 'sometimes|string|nullable',
                'last_job' => 'sometimes|string|nullable',
                'job_date_start' => 'sometimes|date|nullable',
                'job_date_finish' => 'sometimes|date|after:job_date_start|nullable',
                'duties' => 'sometimes|string|nullable',
                'resume_visibility' => 'required|integer',
                'no_experience' => 'sometimes|integer|nullable',
                'education_lvl'=> 'sometimes|string|nullable',
                'type_education_lvl'=> 'integer|nullable',
                'institution'=> 'sometimes|string|nullable',
                'education_date_start'=> 'sometimes|date|nullable',
                'education_date_finish'=> 'sometimes|date|after:education_date_start|nullable',
                'avatar'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|nullable',
            ]);

            $data = $request->all();
            $data['avatar'] = $this->resumeService->getFile($request);
            $updated = $this->resumeService->updateResume($data, $id);

            return redirect(route('resumes.show', ['resume' => $id]));
        } catch (\Exception $exception) {
            return redirect(route('resumes.edit', ['resume' => $id]));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->resumeService->softDeleteResume($id);

        return redirect(route('resumes.index'));
    }

    /**
     * @param $id
     * @throws \Mpdf\MpdfException
     *
     */
    public function download($id)
    {
        $resume = $this->fetchResumeOrFail($id);
        $pdf = $this->resumeService->download($resume);
    }

    /**
     * @param int $id
     * @return mixed
     *
     *
     */
    private function fetchResumeOrFail(int $id)
    {
        try {
            $resume = $this->resumeService->getResumeById($id);

            if ($resume == null) {
                $userRoles = $this->getUserRole();
                if ((array_intersect($userRoles, ['Admin', 'Moderator']))){
                    $resume = $this->resumeService->getResumeByIdWithTrashed($id);
                }
            }

            return $resume;
        } catch (\Exception $e) {
            abort(Response::HTTP_NOT_FOUND, $e->getMessage());
        }
    }

    public function adminDestroy($id)
    {
        $deleted = $this->resumeService->hardDeleteResume($id);
        return redirect(route('resumes.admin.all'));
    }

    public function adminRestore($id)
    {

        $restored = $this->resumeService->restoreTrashed($id);
        return redirect(route('resumes.admin.all'));
    }

    public function showAll()
    {
        $userRoles = $this->getUserRole();

        if ($userRoles) {
            if ((array_intersect($userRoles, ['Admin', 'Moderator']))) {

                $resumes = $this->resumeService->getAllResumesWithTrashed();

                foreach ($resumes as $resume) {
                    $resume->author = $this->resumeService->getResumeAuthor($resume->user_id);
                }

                return view('resumes.admin.all', compact('resumes'));
            }
        }

        return redirect(route('home'));
    }

    public function getUserRole()
    {
        $userId = Auth::id();
        $user = User::find($userId);

        if ($user) {
            foreach ($user->roles as $role) {
                $userRoles[] = $role->name;
            }
            return $userRoles;
        }

        return null;
    }

}
