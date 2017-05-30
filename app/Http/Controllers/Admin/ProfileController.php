<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index')->with('user', $user);
    }

    public function showResetForm()
    {
        return view('admin.profile.reset');
    }

    public function reset(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::find(Auth::id());

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        return redirect('/beheer');
    }
}
