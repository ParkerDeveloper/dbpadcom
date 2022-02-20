<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile');
    }

    public function getProfile()
    {
        return view('profile.edit');
    }

    public function getProfileEdit()
    {
        return view('profile.edit');
    }

    public function settings()
    {
        return view('profile.profile-settings');
    }

    public function update_profile(Request $request)
    {
        $user = Auth::user();
        $data = $this->validate($request, [
            'full_name' => 'required',
            'gamenickname' => 'required',
            'addres' => 'required',
            'kventa' => 'required',
        ]);
        $user->full_name = $data['full_name'];
        $user->gamenickname = $data['gamenickname'];
        $user->addres = $data['addres'];
        $user->kventa = $data['kventa'];
        $user->save();
        return redirect('/profile/edit/'.Auth::user()->id)->with('success', 'User has been updated!');
    }
}
