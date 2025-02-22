<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Designation;
use App\Models\Vacancy;

class ViewJobController extends Controller
{
    public function index()
    {
        $jobs = Job::where('status', 'C')
            ->orWhere('status', null)
            ->orderBy('app_no', 'desc')->get();
        return view('dashboard', ['jobs' => $jobs]);
    }

    public function show($id)
    {
        $job = Job::find($id);
        $education = Education::where('app_no', $id)->get();
        if($education) {
            $job->education = $education;
        }

        $designation = Designation::find($job->position_id);
        if($designation) {
            $job->designation = $designation->desg_short;
        }
        else{
            $vacany = Vacancy::find($job->job_id);
            $job->designation = $vacany->job_id;
        }
        return view('profile', ['job' => $job]);
    }

    public function changeStatus(Request $request, $app_no){
        $status = $request->input('status');
        $application = Job::where('app_no', $app_no)->first();
        if($application){
            $application->status = $status;
            $application->save();
            return response()->json(['success' => 'Status of the application changed successfully']);
        }
        else {
            return response()->json(['error' => 'The application number no found!'], 404);
        }
    }

    public function shortlisted(){
        $jobs = Job::where('status', 'S')->get();
        return view('dashboard', ['jobs' => $jobs]);
    }

    public function debug()
    {
        $jobs = Education::orderBy('app_no', 'asc')->get();
        if($jobs) {
            return response()->json($jobs);
        }
        return response()->json(['message' => 'No jobs found']);
    }
}
