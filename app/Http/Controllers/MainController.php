<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use App\Models\Company;
use App\Models\HomePage;
use App\Models\JobsPage;
use App\Models\AboutPage;
use App\Models\ContactPage;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $homePageData = HomePage::first();

        $company = Company::all();
        $jobs = jobs::where('status', 'Active')->paginate(2);

        $developerJob = jobs::where('status', 'Active')->where('category', 'Developers')->count();
        $designerJob = jobs::where('status', 'Active')->where('category', 'Designers')->count();
        $uiuxJob = jobs::where('status', 'Active')->where('category', 'UI/UX')->count();
        $marketingJob = jobs::where('status', 'Active')->where('category', 'Marketing')->count();
        $otherJob = jobs::where('status', 'Active')
            ->whereNotIn('category', ['Developers', 'Designers', 'UI/UX', 'Marketing'])
            ->count();

        return view('template.Page.1_home', compact('company', 'jobs', 'developerJob', 'designerJob', 'uiuxJob', 'marketingJob', 'otherJob', 'homePageData'));
        //return $company;
    }
    public function HomePageAdmin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $homePageData = HomePage::first();
        return view('template.DashBoard.Admin.12_Admin_HomePageCreate', compact('profileData', 'homePageData'));
    }
    public function HomePageStoreAdmin(Request $request)
    {
        $homePageData = HomePage::firstOrNew();

        $homePageData->title = $request->input('title');
        $homePageData->sub_title = $request->input('sub_title');

        if ($request->hasFile('bg_img')) {
            $file = $request->file('bg_img');

            // Delete previous image if it exists
            if ($homePageData->bg_img) {
                @unlink(public_path('upload/homeBanner/' . $homePageData->bg_img));
            }

            // Move and save new image
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/homeBanner'), $filename);
            $homePageData->bg_img = $filename;
        }

        $homePageData->save();

        return redirect()->back()->with('success', 'Home Page Updated Successfully');
    }
    public function AboutPage()
    {
        $company = Company::all();
        $aboutPageData = AboutPage::first();
        return view('template.Page.2_about', compact('aboutPageData', 'company'));
    }
    public function AboutPageAdmin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $aboutPageData = AboutPage::first();
        return view('template.DashBoard.Admin.6_Admin_AboutPageCreate', compact('profileData', 'aboutPageData'));
    }
    public function AboutPageStoreAdmin(Request $request)
    {
        $aboutPageData = AboutPage::firstOrNew();

        $aboutPageData->company_title = $request->input('company_title');
        $aboutPageData->company_history = $request->input('company_history');
        $aboutPageData->company_vision = $request->input('company_vision');

        if ($request->hasFile('company_about_banner_image')) {
            $file = $request->file('company_about_banner_image');

            // Delete previous image if it exists
            if ($aboutPageData->company_about_banner_image) {
                @unlink(public_path('upload/aboutBanner/' . $aboutPageData->company_about_banner_image));
            }

            // Move and save new image
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/aboutBanner'), $filename);
            $aboutPageData->company_about_banner_image = $filename;
        }

        $aboutPageData->save();

        return redirect()->back()->with('success', 'About Page Created Successfully');
    }
    public function JobPage()
    {
        $jobsPageData = JobsPage::first();

        $developerJob = jobs::where('status', 'Active')->where('category', 'Developers')->count();
        $designerJob = jobs::where('status', 'Active')->where('category', 'Designers')->count();
        $uiuxJob = jobs::where('status', 'Active')->where('category', 'UI/UX')->count();
        $marketingJob = jobs::where('status', 'Active')->where('category', 'Marketing')->count();
        $otherJob = jobs::where('status', 'Active')
            ->whereNotIn('category', ['Developers', 'Designers', 'UI/UX', 'Marketing'])
            ->count();

        $jobs = jobs::where('status', 'Active')->paginate(4);

        return view('template.Page.3_jobs', compact('jobs', 'developerJob', 'designerJob', 'uiuxJob', 'marketingJob', 'otherJob', 'jobsPageData'));
    }
    public function JobsPageAdmin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $jobsPageData = JobsPage::first();
        return view('template.DashBoard.Admin.13_Admin_JobsPageCreate', compact('profileData', 'jobsPageData'));
    }
    public function JobsPageStoreAdmin(Request $request)
    {
        $jobsPageData = JobsPage::firstOrNew();

        $jobsPageData->title = $request->input('title');
        $jobsPageData->sub_title = $request->input('sub_title');

        if ($request->hasFile('bg_img')) {
            $file = $request->file('bg_img');

            // Delete previous image if it exists
            if ($jobsPageData->bg_img) {
                @unlink(public_path('upload/jobsBanner/' . $jobsPageData->bg_img));
            }

            // Move and save new image
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/jobsBanner'), $filename);
            $jobsPageData->bg_img = $filename;
        }

        $jobsPageData->save();

        return redirect()->back()->with('success', 'Jobs Page Updated Successfully');
    }
    public function BlogPage()
    {
        $developerJob = jobs::where('status', 'Active')->where('category', 'Developers')->count();
        $designerJob = jobs::where('status', 'Active')->where('category', 'Designers')->count();
        $uiuxJob = jobs::where('status', 'Active')->where('category', 'UI/UX')->count();
        $marketingJob = jobs::where('status', 'Active')->where('category', 'Marketing')->count();
        $otherJob = jobs::where('status', 'Active')
            ->whereNotIn('category', ['Developers', 'Designers', 'UI/UX', 'Marketing'])
            ->count();

        $jobs = jobs::where('status', 'Active')->paginate(4);

        return view('template.Page.3_jobs', compact('jobs', 'developerJob', 'designerJob', 'uiuxJob', 'marketingJob', 'otherJob'));
    }
    public function BlogPageAdmin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $aboutPageData = AboutPage::first();
        return view('template.DashBoard.Admin.14_Admin_BlogPageCreate', compact('profileData', 'aboutPageData'));
    }
    public function BlogPageStoreAdmin(Request $request)
    {
        $aboutPageData = AboutPage::firstOrNew();

        $aboutPageData->company_title = $request->input('company_title');
        $aboutPageData->company_history = $request->input('company_history');
        $aboutPageData->company_vision = $request->input('company_vision');

        if ($request->hasFile('company_about_banner_image')) {
            $file = $request->file('company_about_banner_image');

            // Delete previous image if it exists
            if ($aboutPageData->company_about_banner_image) {
                @unlink(public_path('upload/aboutBanner/' . $aboutPageData->company_about_banner_image));
            }

            // Move and save new image
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/aboutBanner'), $filename);
            $aboutPageData->company_about_banner_image = $filename;
        }

        $aboutPageData->save();

        return redirect()->back()->with('success', 'About Page Created Successfully');
    }
    public function ContactPage()
    {
        $company = Company::all();
        $contactPageData = ContactPage::first();
        return view('template.Page.5_contact', compact('contactPageData', 'company'));
    }
    public function ContactPageAdmin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $contactPageData = ContactPage::first();
        return view('template.DashBoard.Admin.10_Admin_ContactPageCreate', compact('profileData', 'contactPageData'));
    }
    public function ContactPageStoreAdmin(Request $request)
    {
        $aboutPageData = ContactPage::firstOrNew();

        $aboutPageData->title = $request->input('title');
        $aboutPageData->address = $request->input('address');
        $aboutPageData->phone = $request->input('phone');
        $aboutPageData->email = $request->input('email');

        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');

            // Delete previous image if it exists
            if ($aboutPageData->background_image) {
                @unlink(public_path('upload/contactBanner/' . $aboutPageData->background_image));
            }

            // Move and save new image
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/contactBanner'), $filename);
            $aboutPageData->background_image = $filename;
        }

        $aboutPageData->save();

        return redirect()->back()->with('success', 'Contact Page Updated Successfully');
    }

}
