<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
                'content' => 'required'
            ]);

            $resume = new Resume();
            $resume->content = $request->get('content');
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
        try {
            $this->validate($request, [
                'content' => 'required'
            ]);


            $resume = app()->make(Resume::class)->find($id);

            $resume->content = $request->get('content');
            $resume->save();

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
        $resume = Resume::findOrFail($id);

        $resume->delete();
        return redirect(route('resumes.index'));
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
