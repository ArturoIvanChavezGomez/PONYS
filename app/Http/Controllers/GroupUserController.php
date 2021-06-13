<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Group;
use Illuminate\Validation\ValidationException;

class GroupUserController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|min:5|max:20',
            'password' => 'required|string|min:5|max:10',
        ]);

        $user = User::find(Auth::user()->id);

        $group = Group::where('name', '=', $request->name)->first();

        if($group != null){
            
            $groupUser = Group::find($group->id)->users;

            if($request->password == $group->password){

                if($groupUser->find($user->id) == null){
    
                    $user->groups()->attach($group->id);
                    return back()->with('status', '¡Te registraste al grupo correctamente!');
    
                } else {
                    return back()->with('status', '¡Ya estás inscrito en este grupo!');
                }
    
            } else {
                throw ValidationException::withMessages([
                    __('auth.failed'),
                ]);
            }
        }
        else {
            throw ValidationException::withMessages([
                __('auth.failed'),
            ]);
        }

        
    }
}
