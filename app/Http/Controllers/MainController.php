<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use App\Models\Company;
use App\Models\BlogPage;
use App\Models\HomePage;
use App\Models\JobsPage;
use App\Models\AboutPage;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;
use Exception;

class MainController extends Controller
{
    public function home()
    {
        $homePageData = HomePage::first();

        $company = Company::all();

        $jobsAll = jobs::where('status', 'Active')->count();
        //$jobs = jobs::where('status', 'Active')->orderBy('created_at', 'desc')->paginate(5);
        $jobs = jobs::with('company')->where('status', 'Active')->orderBy('created_at', 'desc')->paginate(5);
        //$jobs = jobs::with('company')->where('status', 'Active')->get();

        $developerJob = jobs::where('status', 'Active')->where('category', 'Developers')->count();
        $developerJobShow = jobs::with('company')->where('status', 'Active')->where('category', 'Developers')->orderBy('created_at', 'desc')->paginate(5);

        $designerJob = jobs::where('status', 'Active')->where('category', 'Designers')->count();
        $designerJobShow = jobs::with('company')->where('status', 'Active')->where('category', 'Designers')->orderBy('created_at', 'desc')->paginate(5);

        $uiuxJob = jobs::where('status', 'Active')->where('category', 'UI/UX')->count();
        $uiuxJobShow = jobs::with('company')->where('status', 'Active')->where('category', 'UI/UX')->orderBy('created_at', 'desc')->paginate(5);

        $marketingJob = jobs::where('status', 'Active')->where('category', 'Marketers')->count();
        $marketingJobShow = jobs::with('company')->where('status', 'Active')->where('category', 'Marketers')->orderBy('created_at', 'desc')->paginate(5);

        $otherJob = jobs::with('company')->where('status', 'Active')->whereNotIn('category', ['Developers', 'Designers', 'UI/UX', 'Marketers'])->count();
        $otherJobShow = jobs::with('company')->where('status', 'Active')->whereNotIn('category', ['Developers', 'Designers', 'UI/UX', 'Marketers'])->orderBy('created_at', 'desc')->paginate(5);

        return view('template.Page.1_home', compact('company', 'jobs', 'jobsAll', 'developerJob', 'developerJobShow', 'designerJob', 'designerJobShow', 'uiuxJob', 'uiuxJobShow', 'marketingJob', 'marketingJobShow', 'otherJob', 'otherJobShow', 'homePageData'));

        //return $jobs;
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

        $jobsAll = jobs::where('status', 'Active')->count();
        $jobs = jobs::where('status', 'Active')->orderBy('created_at', 'desc')->paginate(4);

        $developerJob = jobs::where('status', 'Active')->where('category', 'Developers')->count();
        $developerJobShow = jobs::where('status', 'Active')->where('category', 'Developers')->orderBy('created_at', 'desc')->paginate(4);

        $designerJob = jobs::where('status', 'Active')->where('category', 'Designers')->count();
        $designerJobShow = jobs::where('status', 'Active')->where('category', 'Designers')->orderBy('created_at', 'desc')->paginate(4);

        $uiuxJob = jobs::where('status', 'Active')->where('category', 'UI/UX')->count();
        $uiuxJobShow = jobs::where('status', 'Active')->where('category', 'UI/UX')->orderBy('created_at', 'desc')->paginate(4);

        $marketingJob = jobs::where('status', 'Active')->where('category', 'Marketers')->count();
        $marketingJobShow = jobs::where('status', 'Active')->where('category', 'Marketers')->orderBy('created_at', 'desc')->paginate(4);

        $otherJob = jobs::where('status', 'Active')
            ->whereNotIn('category', ['Developers', 'Designers', 'UI/UX', 'Marketers'])
            ->count();
        $otherJobShow = jobs::where('status', 'Active')
            ->whereNotIn('category', ['Developers', 'Designers', 'UI/UX', 'Marketers'])
            ->orderBy('created_at', 'desc')->paginate(4);


        return view('template.Page.3_jobs', compact('jobs', 'jobsAll', 'developerJob', 'developerJobShow', 'designerJob', 'designerJobShow', 'uiuxJob', 'uiuxJobShow', 'marketingJob', 'marketingJobShow', 'otherJob', 'otherJobShow', 'jobsPageData'));
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
        $blogPageData = BlogPage::first();
        return view('template.Page.6_blog', compact('blogPageData'));
    }
    public function BlogPageAdmin()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $blogPageData = BlogPage::first();
        return view('template.DashBoard.Admin.14_Admin_BlogPageCreate', compact('profileData', 'blogPageData'));
    }
    public function BlogPageStoreAdmin(Request $request)
    {
        $blogPageData = BlogPage::firstOrNew();

        $blogPageData->title = $request->input('title');
        $blogPageData->sub_title = $request->input('sub_title');

        if ($request->hasFile('bg_img')) {
            $file = $request->file('bg_img');

            // Delete previous image if it exists
            if ($blogPageData->bg_img) {
                @unlink(public_path('upload/blogBanner/' . $blogPageData->bg_img));
            }

            // Move and save new image
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blogBanner'), $filename);
            $blogPageData->bg_img = $filename;
        }

        $blogPageData->save();

        return redirect()->back()->with('success', 'Blog Page Updated Successfully');
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
    public function ContactText(Request $request)
    {
        // $AdminEmail = 'jobpulse@info.com';

        // $details = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ];

        // Mail::to($AdminEmail)->send(new OTPMail($details));
        // return redirect()->back()->with('success', "We will contact with you soon...");

        try {
            $AdminEmail = 'jobpulse@info.com';

            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Mail::to($AdminEmail)->send(new OTPMail($details));
            return redirect()->back()->with('success', "We will contact with you soon...");
        } catch (Exception $e) {
            return redirect()->back()->with('error', "Something went wrong...");
        }
    }

}
