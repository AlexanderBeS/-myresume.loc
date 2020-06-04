<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //test for roles
        //$user = User::find(1);
        //dd($user->roles);
        $role = Role::find(2);
        dd($role->users);

        //test for roles


        $resumes = Resume::all()->where('user_id', Auth::id());

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

        try {
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
                'education_lvl'=> 'sometimes|integer|nullable',
                'type_education_lvl'=> 'integer|nullable',
                'institution'=> 'sometimes|string|nullable',
                'education_date_start'=> 'sometimes|date|nullable',
                'education_date_finish'=> 'sometimes|date|after:job_date_start|nullable',
                'avatar'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|nullable',
            ]);

            $fileName = null;
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('./storage', $fileName);
            }

            $resume = new Resume();
                $resume->position = $request->get('position');
                $resume->city = $request->get('city');
                $resume->employment_type = $request->get('employment_type');
                $resume->salary = $request->get('salary');
                $resume->job_category = $request->get('job_category');
                $resume->experience = $request->get('experience');
                $resume->last_job = $request->get('last_job');
                $resume->job_date_start = $request->get('job_date_start');
                $resume->job_date_finish = $request->get('job_date_finish');
                $resume->duties = $request->get('duties');
                $resume->no_experience = $request->get('no_experience');
                $resume->education_lvl = $request->get('education_lvl');
                $resume->type_education_lvl = $request->get('type_education_lvl');
                $resume->institution = $request->get('institution');
                $resume->education_date_start = $request->get('education_date_start');
                $resume->education_date_finish = $request->get('education_date_finish');
                $resume->resume_visibility = $request->get('resume_visibility');
                $resume->avatar = $fileName;
                $resume->user_id = Auth::id();
            $resume->save();

            return redirect(route('resumes.index'));

        } catch (\Exception $e) {
            return redirect(route('resumes.create'));
        }
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

        //try {
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
                'education_lvl'=> 'sometimes|integer|nullable',
                'type_education_lvl'=> 'integer|nullable',
                'institution'=> 'sometimes|string|nullable',
                'education_date_start'=> 'sometimes|date|nullable',
                'education_date_finish'=> 'sometimes|date|after:job_date_start|nullable',
                'avatar'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|nullable',
            ]);

            $fileName = null;
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('./storage', $fileName);
            }

            $resume = app()->make(Resume::class)->find($id);
                $resume->position = $request->get('position');
                $resume->city = $request->get('city');
                $resume->employment_type = $request->get('employment_type');
                $resume->salary = $request->get('salary');
                $resume->job_category = $request->get('job_category');
                $resume->experience = $request->get('experience');
                $resume->last_job = $request->get('last_job');
                $resume->job_date_start = $request->get('job_date_start');
                $resume->job_date_finish = $request->get('job_date_finish');
                $resume->duties = $request->get('duties');
                $resume->no_experience = $request->get('no_experience');
                $resume->education_lvl = $request->get('education_lvl');
                $resume->type_education_lvl = $request->get('type_education_lvl');
                $resume->institution = $request->get('institution');
                $resume->education_date_start = $request->get('education_date_start');
                $resume->education_date_finish = $request->get('education_date_finish');
                $resume->resume_visibility = $request->get('resume_visibility');
                if(!is_null($fileName)) $resume->avatar = $fileName;
            $resume->save();

            return redirect(route('resumes.show', ['resume' => $id]));
//        } catch (\Exception $exception) {
//            return redirect(route('resumes.edit', ['resume' => $id]));
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resume = Resume::findOrFail($id);

        $resume->delete();
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
        $template = view('resumes.pdf', compact('resume')); //dd($template);



        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($template->render());
        $mpdf->Output();
    }

    private function fetchResumeOrFail(int $id)
    {
        try {
            return Resume::find($id);
        } catch (\Exception $e) {
            abort(Response::HTTP_NOT_FOUND, $e->getMessage());
        }
    }
}
