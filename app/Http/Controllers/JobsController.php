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
        //$jobs = jobs::where('status', 'Active')->paginate(5);
        $jobs = ApplyJob::where('user_id', $cUId)
            ->with('jobs')
            //->get();
            ->paginate(5);
        return view('template.DashBoard.Candidate.2_Candidate_Jobs', compact('jobs', 'profileData'));
        //return $jobs;
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
        return view('template.DashBoard.Company.2_Company_Jobs', compact('jobs', 'profileData'));
        // return $companies;
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
        $job = new jobs(); // Create a new job instance
        $job->company_id = $user->id;
        $job->category = $request->input('category');
        $job->title = $request->input('title');
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
        // $request->validate([
        //     'status' => 'required',
        // ]);
        jobs::where('id', $jobId)->update([
            'category' => $request->category,
            'title' => $request->title,
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
        //find those who applied for the job
        //$job = ApplyJob::where('job_id', $jobId)->first();
        $users = ApplyJob::where('job_id', $jobId)
            ->with('user')
            ->paginate(10);
        //->get();
        $job = jobs::where('id', $jobId)->first();
        //$users = $job->users()->paginate(10);
        //$users = $job->users()->get();
        return view('template.DashBoard.Company.5_Company_Apply', compact('job', 'users', 'profileData'));
        //return $users;
        //return $job;
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
        return view('template.DashBoard.Admin.4_Admin_Jobs', compact('jobs', 'profileData'));
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
