<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::with('roles')->get();

        return view('users.index', compact('users'));
    }

    public function create(array $data)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $roles = Role::pluck('title', 'id');

        return view('users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $user->load('roles');

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return redirect()->route('users.index');
    }
}
