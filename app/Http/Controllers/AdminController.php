<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function getProfile()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);

        return view('admin.admin_profile_view', compact('userData'));
    }

    public function editProfile(){
        $id = Auth::user()->id;
        $userData = User::find($id);

        return view('admin.admin_profile_edit', compact('userData'));
    }
}
