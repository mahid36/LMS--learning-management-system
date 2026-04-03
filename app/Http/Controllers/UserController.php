<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
   function edit_profile(){
        return view('backend.users.edit_profile');
   }

    function update_profile(Request $request){
        $request->validate([
        'name' => 'required|string|max:255',
        'photo'=>'image|mimes:png,jpg,jpeg|max:1024',
        'password'=>'required',
        'new_password'=>
        ['required_with:password',

        ],
        'password_confirmation'=>'nullable|required_with:password|same:new_password',
    ]);
    if($request->password){
        if(Hash::check($request->password,Auth::user()->password)){
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->new_password),
            ]);

        }

        else{
            return back()->with('wrong','Password did not matched');
        }
    }

        if($request->photo){
    if(Auth::user()->photo != null){
        $delete_from = public_path('uploads/users/'. Auth::user()->photo);
        unlink($delete_from);
    }
        $extension = $request->photo->extension();
        $file_name = uniqid().'.'.$extension;

        $manager = new ImageManager(new Driver());
        $image = $manager->read($request->photo);
        $image->save(public_path('uploads/users/'.$file_name ));

        User::find(Auth::id())->update([
            'name'=>$request->name,
            'photo'=>$file_name,
            'country'=>$request->country,
            'address'=>$request->address,
        ]);
        return back();
    }
    else{
        User::find(Auth::id())->update([
            'name'=>$request->name,
            'country'=>$request->country,
            'address'=>$request->address,
        ]);
        return back()->with('success','Profile updated successfully');
    }

    }
}
