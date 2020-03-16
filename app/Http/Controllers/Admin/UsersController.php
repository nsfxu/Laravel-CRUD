<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\{User, Role};
use Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::all();

        // pode usar compact tbm
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {

        if(Gate::denies('edit-users'))
        {
            return redirect(route('admin.users.index'));
        }
        
        $roles = Role::all();
        // pode usar compact tbm
        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
       $user->roles()->sync($request->roles);
         
       $user->name = $request->name;
       $user->email = $request->email;
       $user->save();
       
       return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        if(Gate::denies('delete-users'))
        {
            return redirect(route('admin.users.index'));
        }

        $user->roles()->detach();
        $user->delete();
        
        return redirect()->route('admin.users.index');
    }
}
