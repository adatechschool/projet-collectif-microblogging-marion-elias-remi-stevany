<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('UserProfile', [
            'UserInfo' => User::all()
        ]);
    }

    public function specific(Request $request)
    {
        $id = $request->route('id');
        $user = User::findOrFail($id);
        // Fetch posts associated with the user
        $userPosts = DB::table('posts')
            ->where('user_id', $id)
            ->get();
        return view('SpecificUserProfile', [
            'UserInfo' => $user,
            'UserPosts' => $userPosts

        ]);
    }
}