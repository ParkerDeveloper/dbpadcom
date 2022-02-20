<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cause;
use App\Models\State;
use App\Models\User;
use App\Models\divisions_ranks;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = (new User())->get();
        $usersCount = (new User())->count();
        $divisions_ranks = (new divisions_ranks())->get();
        $params = [
          'users' => $users,
          'total' => $usersCount,
          'ranks' => $divisions_ranks,
        ];

        return view('admin.dashboard', $params);
    }

    public function add()
    {
        $cause = (new Cause())->get();
        $state = (new State())->get();
        $params = [
            'causes' => $cause,
            'states' => $state

        ];
        return view('admin.add', $params);
    }

    public function add_update_cause(Request $request)
    {
        $info = new Cause();
        $info->title = $request->input('cause');
        $info->save();
        return back()->withSuccess('!');
    }

    public function add_update_state(Request $request)
    {
        $info = new State();
        $info->title = $request->input('state');
        $info->save();
        return back()->withSuccess('!');
    }

    public function add_delete_state($id)
    {
        State::where('id', $id)->delete();
        return back()->withSuccess('!');
    }
    public function add_delete_cause($id)
    {
        Cause::where('id', $id)->delete();
        return back()->withSuccess('!');
    }

    public function getProfile($id)
    {
        $data['user'] = User::findOrFail($id);
        return view('admin.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request,
            [
                'email' => 'required|string|max:255',
                'full_name' => 'required|string|max:255',
                'gamenickname' => 'required|string|max:255'
            ]
        );
        $user->email = (!@$request->email) ? 0 : @$request->email;
        $user->full_name = (!@$request->full_name) ? 0 : @$request->full_name;
		$user->gamenickname = (!@$request->gamenickname) ? 0 : @$request->gamenickname;
        $user->verifed = ($request->verifed == "1") ? 1 : 0;
        $user->dark_mode = ($request->dark_mode == "1") ? 1 : 0;
        $user->dispatcher = ($request->admin == "1") ? 1 : 0;

        if ($request->division == "Operation Save Streets Bureau")
            $user->division = "Operation Save Streets Bureau";
        elseif ($request->division == "Special Enforcement Bureau")
            $user->division = "Special Enforcement Bureau";
        elseif ($request->division == "Internal Affairs Bureau")
            $user->division = "Internal Affairs Bureau";
        elseif ($request->division == "Central Patrol Division")
            $user->division = "Central Patrol Division";
        elseif ($request->division == "None")
            $user->division = "None";

        if ($request->ooc_warn == "1")
            $user->ooc_warn = 1;
        elseif ($request->ooc_warn == "2")
            $user->ooc_warn = 2;
        elseif ($request->ooc_warn == "3")
            $user->ooc_warn = 3;
        elseif ($request->ooc_warn == "0")
            $user->ooc_warn = 0;

        if ($request->ic_warn == "1")
            $user->ic_warn = 1;
        elseif ($request->ic_warn == "2")
            $user->ic_warn = 2;
        elseif ($request->ic_warn == "3")
            $user->ic_warn = 3;
        elseif ($request->ic_warn == "0")
            $user->ic_warn = 0;

        if ($request->verbal_warn == "1")
            $user->verbal_warn = 1;
        elseif ($request->verbal_warn == "2")
            $user->verbal_warn = 2;
        elseif ($request->verbal_warn == "3")
            $user->verbal_warn = 3;
        elseif ($request->verbal_warn == "0")
            $user->verbal_warn = 0;

        if ($request->rank == "1")
            $user->rank = 1;
        elseif ($request->rank == "2")
            $user->rank = 2;
        elseif ($request->rank == "3")
            $user->rank = 3;
        elseif ($request->rank == "4")
            $user->rank = 4;
        elseif ($request->rank == "5")
            $user->rank = 5;
        elseif ($request->rank == "6")
            $user->rank = 6;
        elseif ($request->rank == "7")
            $user->rank = 7;
        elseif ($request->rank == "8")
            $user->rank = 8;
        elseif ($request->rank == "9")
            $user->rank = 10;
        elseif ($request->rank == "11")
            $user->rank = 11;
        elseif ($request->rank == "12")
            $user->rank = 12;

        $user->save();
        return back()->withSuccess('!');
    }

}
