<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_dashboard.dashboard');
    }

    public function admin()
    {
        $admins = Admin::with(['role', 'adminProfile'])->where('role_id', 1)->get();
        return view('admin_dashboard.user.administrator', compact('admins'));
    }

    public function staff()
    {
        $admins = Admin::with(['role', 'adminProfile'])->where('role_id', '!=', 1)->get();
        return view('admin_dashboard.user.staff', compact('admins'));
    }

    public function user()
    {
        $users = User::with(['role', 'userProfile'])->get();
        return view('admin_dashboard.user.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('id', '!=', 1)->where('id', '!=', 2)->get();
        return view('admin_dashboard.user.create-staff', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role_id' => 'required',
        ]);

        $save = Admin::create([
            'name' => strtolower($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make(123),
            'role_id' => strtolower($request->input('role_id')),
        ]);

        if ($save) {
            return redirect()->route('admin.staff.view')->with('success', 'Staff successfully created');
        } else {
            return redirect()->route('admin.staff.view')->with('error', 'Staff not created');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

}
