<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use App\Models\ApplyJob;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function Jobs()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        $jobs = ApplyJob::where('user_id', $cUId)->with('jobs')->paginate(10);
        //$jobs = ApplyJob::where('user_id', $cUId)->with('jobs')->get();
        $jobsSortByName = ApplyJob::where('user_id', $cUId)
            ->with([
                'jobs' => function ($query) {
                    $query->orderBy('title', 'asc');
                }
            ])
            //->get();
            ->paginate(10);

        $jobsSortByDate = ApplyJob::where('user_id', $cUId)->orderBy('created_at', 'desc')->with('jobs')->orderBy('created_at', 'asc')->paginate(10);
        //$jobsSortByDate = ApplyJob::where('user_id', $cUId)->orderBy('created_at', 'desc')->with('jobs')->get();

        return view('template.DashBoard.Candidate.2_Candidate_Jobs', compact('jobs', 'jobsSortByName', 'jobsSortByDate', 'profileData'));
        //return $jobs;
        //return $jobsSortByName;
        //return $jobsSortByDate;
    }
    public function JobView($id)
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $job = jobs::where('id', $id)->first();
        return view('template.DashBoard.Candidate.3_Candidate_Job_View', compact('job', 'profileData'));
    }
    public function ApplyJob($id)
    {
        $user = auth()->user();

        // Check if the user has already applied for the job to avoid duplicate entries
        if (!$user->jobs()->where('job_id', $id)->exists()) {
            // Insert a new record into the apply_jobs table with timestamps
            $user->jobs()->attach($id, ['created_at' => now(), 'updated_at' => now()]);
            return redirect()->back()->with('success', 'Job Applied Successfully');
        } else {
            return redirect()->back()->with('error', 'You have already applied for this job');
        }
    }
    public function CompanyJobsShow()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        $jobs = jobs::where('company_id', $cUId)->paginate(5);
        $jobsSortByTitle = jobs::where('company_id', $cUId)->orderBy('title', 'asc')->paginate(10);
        $jobsSortByDate = jobs::where('company_id', $cUId)->orderBy('created_at', 'asc')->paginate(10);

        return view('template.DashBoard.Company.2_Company_Jobs', compact('jobs', 'jobsSortByTitle', 'jobsSortByDate', 'profileData'));
    }
    public function CompanyJobsCreate()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        return view('template.DashBoard.Company.3_Company_Jobs_Create', compact('profileData'));
    }
    public function CompanyJobsStore(Request $request)
    {
        $user = auth()->user();
        $job = new jobs();
        $job->company_id = $user->id;
        $job->category = $request->input('category');
        $job->type = $request->input('type');
        $job->title = $request->input('title');
        $job->skill1 = $request->input('skill1');
        $job->skill2 = $request->input('skill2');
        $job->skill3 = $request->input('skill3');
        $job->skill4 = $request->input('skill4');
        $job->salary = $request->input('salary');
        $job->description = $request->input('description');
        $job->benefits = $request->input('benefits');
        $job->location = $request->input('location');
        $job->deadline = $request->input('deadline');
        $job->save();

        return redirect()->route('CompanyJobsShow')->with('success', 'Job Posted Successfully');
    }
    public function CompanyJobView($jobId)
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $job = jobs::where('id', $jobId)->first();
        $jobApply = $job->users()->count();
        return view('template.DashBoard.Company.4_Company_Jobs_View', compact('job', 'jobApply', 'profileData'));
    }
    public function CompanyJobViewUpdate(Request $request, $jobId)
    {
        jobs::where('id', $jobId)->update([
            'title' => $request->title,
            'category' => $request->category,
            'type' => $request->type,
            'skill1' => $request->skill1,
            'skill2' => $request->skill2,
            'skill3' => $request->skill3,
            'skill4' => $request->skill4,
            'salary' => $request->salary,
            'description' => $request->description,
            'benefits' => $request->benefits,
            'location' => $request->location,
            'deadline' => $request->deadline,
        ]);

        return redirect()->back()->with('success', 'Job Updated Successfully');
    }
    public function CompanyJobDelete($jobId)
    {
        jobs::where('id', $jobId)->delete();
        return redirect()->back()->with('error', 'Company Delete');
    }
    public function CompanyApply($jobId)
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        $job = jobs::where('id', $jobId)->first();

        $users = ApplyJob::where('job_id', $jobId)->with('user')->paginate(10);
        $usersSortByName = ApplyJob::where('job_id', $jobId)
            ->with([
                'user' => function ($query) {
                    $query->orderBy('name', 'asc');
                }
            ])->paginate(10);

        $usersSortByDate = ApplyJob::where('job_id', $jobId)->with('user')->orderBy('created_at', 'asc')->paginate(10);

        return view('template.DashBoard.Company.5_Company_Apply', compact('job', 'users', 'usersSortByDate', 'usersSortByName', 'profileData'));
    }
    public function CompanyApplyUser($jobId, $userId)
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        $user = User::where('id', $userId)->first();

        $profileDetailData = $user->profile;
        $profileEducationData = $user->profile_education;
        $trainingData = $user->profile_training;
        $experienceData = $user->profile_experience;

        $job = jobs::where('id', $jobId)->first();

        return view('template.DashBoard.Company.6_Company_Apply_User', compact('job', 'user', 'profileData', 'profileDetailData', 'profileEducationData', 'trainingData', 'experienceData'));
        //return $user;
    }
    public function AdminJobs()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        $jobs = jobs::paginate(10);
        $jobsSortByTitle = jobs::orderBy('title', 'asc')->paginate(10);
        $jobsSortByStatus = jobs::orderBy('status', 'asc')->paginate(10);

        return view('template.DashBoard.Admin.4_Admin_Jobs', compact('profileData', 'jobs', 'jobsSortByTitle', 'jobsSortByStatus'));
        //return $jobs;
    }
    public function AdminJobsEdit($id)
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $job = jobs::where('id', $id)->first();
        return view('template.DashBoard.Admin.5_Company_Job_Edit', compact('job', 'profileData'));
        //return $companies;
    }
    public function AdminJobsEditStore(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);
        jobs::where('id', $id)->update([
            'status' => $request->status,
        ]);
        return redirect()->route('AdminJobs')->with('success', 'Job Updated Successfully');
    }
}
