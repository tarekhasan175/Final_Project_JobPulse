<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('pages.auth.admin-signin');
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function employeeSignin()
    {
        return view('pages.auth.employee-signin');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $admin = Admin::where('username', $request->username)->first();
        if ($admin) {
            if ($admin->password === $request->password) {
                session(['admin' => $admin]);
                return redirect()->route('pages.admin.dashboard');
            }
        }
    }
}
