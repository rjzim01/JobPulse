<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function CompanyInfo()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $companyInfo = Company::where('user_id', $cUId)->first();
        return view('template.DashBoard.Company.8_Company_Info', compact('profileData', 'companyInfo'));
    }
    public function CompanyInfoUpdate(Request $request)
    {
        $cUId = auth()->user()->id;
        $company = Company::where('user_id', $cUId)->first();

        $updateData = ['name' => $request->name];

        if ($request->file('logo')) {
            $file = $request->file('logo');
            @unlink(public_path('upload/companyLogo/' . $company->logo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/companyLogo'), $filename);
            $updateData['logo'] = $filename;
        }

        $company->update($updateData);

        return redirect()->route('CompanyInfo')->with('success', 'Company Info Updated Successfully');
    }
    public function AdminCompanie()
    {
        //$companies = User::where('roll', 'Company')->get();
        return User::where('roll', 'Company')->get();
    }
    public function AdminCompanies()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();

        $companies = User::where('roll', 'Company')->paginate(10);
        $companiesSortByName = User::where('roll', 'Company')->orderBy('name', 'asc')->paginate(10);
        $companiesSortByStatus = User::where('roll', 'Company')->orderBy('status', 'asc')->paginate(10);

        return view('template.DashBoard.Admin.2_Admin_Companies', compact('companies', 'companiesSortByName', 'companiesSortByStatus', 'profileData'));
        //return $companies;
    }
    public function AdminCompaniesEdit($id)
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $companies = User::where('id', $id)->first();
        return view('template.DashBoard.Admin.3_Admin_Companies_Edit', compact('companies', 'profileData'));
        //return $companies;
    }
    public function AdminCompaniesEditStore(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);
        User::where('id', $id)->update([
            'status' => $request->status,
        ]);
        return redirect()->route('AdminCompanies')->with('success', 'Company Status Updated Successfully');
    }
    public function AdminCompaniesDelete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('AdminCompanies')->with('error', 'Company Delete');
    }
}
