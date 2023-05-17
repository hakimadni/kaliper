<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Profile;
use App\Models\User;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $use = auth()->user();
        $profile = Profile::where('user_id', $use->id)->first();
        if($profile == null){
            $profile = new Profile();
            $profile->user_id = $use->id;
            $profile->namalengkap = "";
            $profile->nohp = 0;
            $profile->alamat = "";
            $profile->save();
        }
        $user = User::find($use->id);
        return view('user.profile.edit', compact('profile','user'));

    }

    public function save(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'namalengkap' => 'required',
            'phonenumber' => 'required',
            'alamat' => 'required',
        ]);
        // Get the authenticated user
        $user = Auth::user();
    
        // Create or update the user's profile
        $profile = Profile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'namalengkap' => $validatedData['namalengkap'],
                'nohp' => $validatedData['phonenumber'],
                'alamat' => $validatedData['alamat'],
            ]
        );
        // Redirect back or to any other page
        return redirect()->route('dashboard')->with('success', 'Profile saved successfully.');
    }
    

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
