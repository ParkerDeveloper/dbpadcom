<?php

namespace App\Http\Controllers;

use App\Models\divisions;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Cache;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infos = (new divisions())->get();
        $user = (new User())->get();
        $params = [
            'infos' => $infos,
            'users' => $user,

        ];
        return view('home', $params);
    }

	public function information()
    {
        return view('information');
    }

    public function contacts()
    {
        return view('contacts');
    }

	public function logout(Request $request)
	{
		Cache::forget('user-is-online-' . Auth::user()->id);
		Auth::logout();
    	$request->session()->invalidate();
    	$request->session()->regenerateToken();
    	return redirect('/');
	}

	public function status()
    {
        return view('home');
    }

}
