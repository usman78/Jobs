<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Designation;
use App\Models\Vacancy;
use Illuminate\Support\Facades\DB;

class ViewJobController extends Controller
{
    public function index()
    {
        $jobs = Job::where('status', 'C')
            ->orWhere('status', null)
            ->orderBy('app_no', 'desc')->get();
        return view('dashboard', ['jobs' => $jobs]);
    }

    public function summaryDashboard()
    {
        $vacancy_jobs = Vacancy::withCount('jobs')->get();
        // $open_jobs = Job::where('job_id', 9999)->withCount('designation')->get();
        $open_jobs = DB::select("SELECT p.desg_short, COUNT(j.job_id) AS application_count
            FROM online_job_mst j
            JOIN pay_desig p ON j.position_id = p.desg_code
            WHERE j.job_id = 9999
            GROUP BY p.desg_short");
        return view('summary', ['vacancy_jobs' => $vacancy_jobs, 'open_jobs' => $open_jobs]);   
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

    public function designation($id){
        if($id != 9999){
            $position = Vacancy::where('job_id', $id)->first();
            return view('dashboard', ['position' => $position]);
        }
        else {
            $position = Designation::where('desg_code', $id)->first();
            return view('dashboard', ['position' => $position]);
        }
    }

    public function debug()
    {
        // $app = Job::where('app_no', 184)->first();

           $jobs = Job::where('job_id', 1004)->get();
        if($jobs) {
            return response()->json($jobs);
        }
        // return response()->json(['message' => $app->job_id]);
    }
}
