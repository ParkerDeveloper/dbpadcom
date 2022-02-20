<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\State;
use App\Models\Status;
use App\Models\Terminal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Panel extends Controller
{
    public function index()
    {
        $user = (new User())->get();
        $cause = (new Cause())->get();
        $state = (new State())->get();
        $statys = (new Status())->get();
        $infos = (new Terminal())->get();
        $params = [
            'infos' => $infos,
            'users' => $user,
            'causes' => $cause,
            'states' => $state,
            'statyses' => $statys

        ];
        return view('panel', $params);
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $data = $this->validate($request, [
            'status' => 'required',
        ]);
        $user->status = $data['status'];
        $user->save();
        return redirect('/panel/update/'.Auth::user()->id)->with('success', 'User has been updated!');
    }
}
