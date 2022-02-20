<?php

namespace App\Http\Controllers\Terminal;

use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Terminal;
use App\Models\Cause;
use App\Models\State;

class TerminalController extends Controller
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
        return view('terminal', $params);
    }

    public function update(Request $request)
    {
        $info = new Terminal();
        $info->description = $request->input('info');
        $info->state = $request->input('state');
        $info->cause = $request->input('cause');
        $info->unit = $request->input('unit');
        $info->save();
        return back()->withSuccess('!');
    }

    public function update_status(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $this->validate($request, [
            'status' => 'required',
        ]);
        $user->status = $data['status'];
        $user->save();
        return redirect('/terminal/update/status/'.$id)->with('success', 'User has been updated!');
    }

    public function destroy($id)
    {
        Terminal::where('id', $id)->delete();
        return back()->withSuccess('!');
    }
}
