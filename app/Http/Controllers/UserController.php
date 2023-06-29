<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login_view()
    {
        if (session()->get('admin_id')) {
            return redirect('/dashboard');
        } else {
            return view('cms.auth.login');
        }
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        try {
            $data = User::where('email', $request->email)->where('password', $request->password)->get();
            if (count($data) > 0) {
                Session::put('admin_id', $data[0]->user_id);
                Session::put('name', $data[0]->name);
                Session::put('email', $data[0]->email);
                return response()->json(['status' => 'true', 'msg' => 'Thanks For Login']);
            } else {
                return response()->json(['status' => 'false', 'msg' => 'This Email and Password Are Not Matched']);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 'false', 'msg' => 'This Email and Password Are Not Matched']);
        }
    }

    public function dashboard()
    {
        if (session()->get('admin_id')) {
            return view('cms.dashboard.index');
        } else {
            return redirect("/cms");
        }
    }

    public function logout()
    {
        session()->forget('admin_id');
        session()->forget('name');
        session()->forget('email');
        return redirect('/');
    }
}
