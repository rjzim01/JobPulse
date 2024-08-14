<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function AdminDashboard()
    {
        try {
            // $cUId = auth()->user()->id;
            // $profileData = User::where('id', $cUId)->first();
            // $activeCompanies = User::where('roll', 'Company')
            //     ->where('status', 'Active')
            //     ->count();

            // $pendingCompanies = User::where('roll', 'Company')
            //     ->where('status', 'Pending')
            //     ->count();

            // $jobPosted = jobs::where('status', 'Active')->count();

            // return view('template.DashBoard.Admin.1_Admin_Dashboard', compact('activeCompanies', 'pendingCompanies', 'jobPosted', 'profileData'));
            return 'hello';
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something wrong happened.');
        }
    }
    public function CompanyDashboard()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $user = auth()->user()->id;
        $jobPosts = jobs::where('company_id', $user)->count();
        $jobPosted = jobs::where('status', 'Active')
            ->where('company_id', $user)
            ->count();

        return view('template.DashBoard.Company.1_Company_DashBoard', compact('jobPosts', 'jobPosted', 'profileData'));
        //return $profileData;
    }
    public function CandidateDashboard()
    {
        // login user profile data
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $jobApplied = auth()->user()->jobs->count();
        return view('template.DashBoard.Candidate.1_Candidate_DashBoard', compact('jobApplied', 'profileData', 'profileData'));
        //return $profileData;
    }
    public function CompanyPlugin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        return view('template.DashBoard.Company.9_Company_Plugin', compact('profileData'));
    }
    public function AdminPlugin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        return view('template.DashBoard.Admin.11_Admin_Plugin', compact('profileData'));
    }

}
