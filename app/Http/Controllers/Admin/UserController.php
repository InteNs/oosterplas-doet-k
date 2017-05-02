<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUser;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/beheer/gebruiker');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUser $request, $id)
    {
        $user = User::find($id);

        if ($user->email != $request->email) {
            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required|max:255',
            ]);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $user->password
        ]);

        return redirect('/beheer/gebruiker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/beheer/gebruiker');
    }
}
