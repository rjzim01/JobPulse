<?php

namespace App\Http\Controllers;

use App\Models\ProfileEducation;
use App\Models\ProfileExperience;
use App\Models\ProfileTraining;
use App\Models\User;
use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function ProfileCandidate()
    {
        $cUId = auth()->user()->id;
        $profileData = User::where('id', $cUId)->first();
        $profileDetailData = $profileData->profile;
        $profileEducationData = $profileData->profile_education;
        $trainingData = $profileData->profile_training;
        $experienceData = $profileData->profile_experience;
        return view('template.DashBoard.Candidate.4_Candidate_Profile', compact('profileData', 'profileDetailData', 'profileEducationData', 'trainingData', 'experienceData'));
        //return $profileEducationData;
    }
    public function ProfileCandidateStore(Request $request)
    {
        $cUId = auth()->user()->id;
        $profileData = User::with('profile', 'profile_education', 'profile_training', 'profile_experience')->find($cUId);

        if (!$profileData) {
            return redirect()->back()->with('error', 'User data not found');
        }

        // Update profile data -----------------------------------------------
        if ($profileData->profile) {
            $profileDetailData = $profileData->profile;
        } else {
            $profileDetailData = new Profile();
            $profileDetailData->user_id = $cUId;
        }

        $profileDetailData->fill($request->only([
            'full_name',
            'father_name',
            'mother_name',
            'date_of_birth',
            'blood_group',
            'nid',
            'passport',
            'phone',
            'phone2',
            'email',
            'whatsapp',
            'facebook',
            'linkedin',
            'github',
            'dribble',
            'portfolio'
        ]));
        $profileDetailData->save();

        // Update profile education data -------------------------------------
        if ($profileData->profile_education) {
            $profileDetailEducationData = $profileData->profile_education;
        } else {
            $profileDetailEducationData = new ProfileEducation();
            $profileDetailEducationData->user_id = $cUId;
        }

        $profileDetailEducationData->fill($request->only([
            'versityDegree',
            'versityInstitute',
            'versityDepartment',
            'versityYear',
            'versityResult',

            'hscDegree',
            'hscInstitute',
            'hscDepartment',
            'hscYear',
            'hscResult',

            'sscDegree',
            'sscInstitute',
            'sscDepartment',
            'sscYear',
            'sscResult',
        ]));
        $profileDetailEducationData->save();

        // Update profile training data -----------------------------------------
        if ($profileData->profile_training) {
            $trainingData = $profileData->profile_training;
        } else {
            $trainingData = new ProfileTraining();
            $trainingData->user_id = $cUId;
        }

        $trainingData->fill($request->only([
            'traningTitle1',
            'instituteName1',
            'year1',

            'traningTitle2',
            'instituteName2',
            'year2',

            'traningTitle3',
            'instituteName3',
            'year3'
        ]));
        $trainingData->save();

        // Update profile experience data ----------------------------------------
        if ($profileData->profile_experience) {
            $experienceData = $profileData->profile_experience;
        } else {
            $experienceData = new ProfileExperience();
            $experienceData->user_id = $cUId;
        }

        $experienceData->fill($request->only([
            'designation1',
            'companyName1',
            'joiningDate1',
            'leftDate1',

            'designation2',
            'companyName2',
            'joiningDate2',
            'leftDate2',

            'designation3',
            'companyName3',
            'joiningDate3',
            'leftDate3',

            'skills',
            'currentSalary',
            'expectedSalary'
        ]));
        $experienceData->save();

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
