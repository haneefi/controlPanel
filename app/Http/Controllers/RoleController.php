<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    public function __construct()
    {
        abort_if(!Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::get();
        return view('users.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = Permission::pluck('title', 'id');
        return view('users.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $validated = $request->validate([
            'title' => 'required|max:255',
            'permissions'   => 'required|array',
        ]);

        $role = Role::create($validated);
        $role->permissions()->sync($request->input('permissions', []));

        return redirect()->route('users.roles.index')->with('status','User Role Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
        return view('users.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
        $permissions = Permission::pluck('title', 'id');
        $role->load('permissions');
        return view('users.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
        $validated = $request->validate([
            'title' => 'required|max:255',
            'permissions'   => 'required|array',
        ]);

        $role->update($validated);
        $role->permissions()->sync($request->input('permissions', []));

        return redirect()->route('users.roles.index')->with('status','User Role Updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
        $role->delete();
        return redirect()->route('users.roles.index')->with('status','User Role Deleted');
    }
}
