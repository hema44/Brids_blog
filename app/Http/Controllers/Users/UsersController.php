<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UpdateUserProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        return view('users.index')->with('users', User::all());
    }

    public function makeAdmin(User $user){
        $user->role = 'admin';

        $user->save();

        return redirect()->back()->with('success', 'You have successfully made '.$user->name.' an Admin');

    }

    public function edit(){
        return view('users.edit')->with('user', auth()->user());
    }

    public function update(UpdateUserProfileRequest $request){

        $user = auth()->user();
        if(request()->hasFile('image')){//check if has new  image or not
            $user->update([
                'name' => $request->name,
                'about' => $request->about,
                'gender' => $request->gender,
                'image' =>$_FILES['image']['name'],
                'birth_data'=>$request->birth_data,
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'about' => $request->about,
                'gender' => $request->gender,
                'birth_data'=>$request->birth_data,
            ]);
        }
        return redirect(url('/home'))->with('success', 'Your Profile data is updated successfully ! ');
    }
}
