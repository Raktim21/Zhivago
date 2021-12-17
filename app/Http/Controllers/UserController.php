<?php

namespace App\Http\Controllers;

use App\Models\UserProfileImage;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $profileImage = UserProfileImage::where('user_id',Auth::user()->id)->first();

 

        return view('user.dashboard',compact('profileImage'));
    }
}
