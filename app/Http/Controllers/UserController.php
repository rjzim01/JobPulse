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
    public function CompanyEmployeeCreate()
    {
        $profileData = User::where('id', Auth::user()->id)->first();
        return view('template.DashBoard.Company.11_Company_Employee_Create', compact('profileData'));
    }
    public function CompanyEmployeeStore(Request $request)
    {
        $user = new User();
        $user->email = $request->input('email');
        $user->roll = $request->input('roll');
        $user->password = Hash::make(111);
        $user->company_identifier = User::where('id', Auth::user()->id)->pluck('name')->first();
        $user->save();

        return redirect()->back()->with('success', 'User Created Successfully');
    }
    public function ApiCompanyEmployee()
    {
        $company = User::where('id', Auth::user()->id)->pluck('name')->first();
        if (Auth::user()->roll === 'Company') {
            return User::where('company_identifier', $company)->get();
        } elseif (Auth::user()->roll === 'Company_Manager') {
            return User::where('roll', 'Company_Editor')->get();
        }
    }
    public function CompanyEmployee()
    {
        //$user = User::where('id', Auth::user()->id)->pluck('name')->first();
        //return $user;
        $profileData = User::where('id', Auth::user()->id)->first();
        return view('template.DashBoard.Company.10_Company_Employee', compact('profileData'));
    }
    public function CompanyEmployeeEdit($userId)
    {
        $profileData = User::where('id', Auth::user()->id)->first();
        $user = User::where('id', $userId)->first();
        return view('template.DashBoard.Company.12_Company_Employee_Edit', compact('user', 'profileData'));
        //return $user;
    }
    public function CompanyEmployeeUpdate(Request $request, $userId)
    {
        User::where('id', $userId)->update([
            'email' => $request->email,
            'roll' => $request->roll,
            'company_identifier' => $request->company_identifier,
        ]);
        return redirect()->back()->with('success', 'Updated Successfully');
    }
    /////////////////////////////////////////////////////////////////////////////////////////////
    public function AdminEmployeeCreate()
    {
        $profileData = User::where('id', Auth::user()->id)->first();
        return view('template.DashBoard.Admin.16_Admin_Employee_Create', compact('profileData'));
    }
    public function AdminEmployeeStore(Request $request)
    {
        $user = new User();
        $user->email = $request->input('email');
        $user->roll = $request->input('roll');
        $user->password = Hash::make(111);
        $user->save();

        return redirect()->back()->with('success', 'User Created Successfully');
    }
    public function ApiAdminEmployee()
    {
        if (Auth::user()->roll === 'Admin') {
            return User::where('roll', 'Manager')->orWhere('roll', 'Editor')->get();
        } elseif (Auth::user()->roll === 'Manager') {
            return User::where('roll', 'Editor')->get();
        }
        // return User::where('roll', 'Manager')->orWhere('roll', 'Editor')->get();
    }
    public function AdminEmployee()
    {
        $profileData = User::where('id', Auth::user()->id)->first();
        return view('template.DashBoard.Admin.15_Admin_Employee', compact('profileData'));
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function ApiAdminRollPermission()
    {
        if (Auth::user()->roll === 'Admin') {
            return User::all();
        } elseif (Auth::user()->roll === 'Manager') {
            //return User::where('roll', 'Editor')->get();
            return User::where('roll', 'Candidate')->orWhere('roll', 'Editor')->get();
        }
        //return User::all();
    }
    public function AdminRollPermission()
    {
        $id = Auth::user()->id;
        $profileData = User::where('id', $id)->first();

        $users = User::paginate(10);
        $usersSortByName = User::orderBy('name', 'asc')->paginate(10);
        $usersSortByRoll = User::orderBy('roll', 'asc')->paginate(10);

        return view('template.DashBoard.Admin.8_Admin_Permission', compact('users', 'usersSortByName', 'usersSortByRoll', 'profileData'));
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
        //return redirect()->route('AdminRollPermission')->with('success', 'Roll Updated Successfully');
        return redirect()->back()->with('success', 'Roll Updated Successfully');
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
        $data->name = $request->name;
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
