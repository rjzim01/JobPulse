<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Course;

class UserController extends Controller
{
    public function AdminRollPermission()
    {
        $id = Auth::user()->id;
        $profileData = User::where('id', $id)->first();
        $users = User::paginate(10);
        return view('template.DashBoard.Admin.8_Admin_Permission', compact('users', 'profileData'));
    }
    public function AdminRollPermissionEdit($id)
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $user = User::where('id', $id)->first();
        return view('template.DashBoard.Admin.9_Roll_Edit', compact('user', 'profileData'));
        //return $companies;
    }
    public function AdminRollPermissionStore(Request $request, $id)
    {
        $request->validate([
            'roll' => 'required',
        ]);
        User::where('id', $id)->update([
            'roll' => $request->roll,
        ]);
        return redirect()->route('AdminRollPermission')->with('success', 'Roll Updated Successfully');
    }
    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileDetailData = User::find($id);
        $profileData = User::where('id', $id)->first();
        return view('template.DashBoard.Admin.7_Admin_Profile', compact('profileData', 'profileDetailData'));
    }
    public function CompanyProfile()
    {
        $id = Auth::user()->id;
        $profileDetailData = User::find($id);
        $profileData = User::where('id', $id)->first();
        return view('template.DashBoard.Company.7_Company_Profile_Top', compact('profileData', 'profileDetailData'));
    }
    public function UserProfile()
    {
        $id = Auth::user()->id;
        $profileDetailData = User::find($id);
        $profileData = User::where('id', $id)->first();
        return view('template.DashBoard.Candidate.5_Candidate_Profile_Top', compact('profileData', 'profileDetailData'));
    }
    public function UserProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;

        // Update profile photo if provided
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/userProfile/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/userProfile'), $filename);
            $data['photo'] = $filename;
        }

        // Update password if provided and validate
        if ($request->filled('old_password') && $request->filled('new_password') && $request->filled('confirm_password')) {
            if (!Hash::check($request->old_password, auth()->user()->password)) {
                return back()->with('error', 'Current Password Does not Match!');
            }
            if ($request->new_password !== $request->confirm_password) {
                return back()->with('error', 'New Password and Confirm Password must match!');
            }
            $data->password = Hash::make($request->new_password);
        }

        $data->save();

        if ($request->filled('old_password')) {
            return redirect()->back()->with('success', 'Profile and Password Updated Successfully');
        } else {
            return redirect()->back()->with('success', 'Profile Updated Successfully');
        }
    }

}
