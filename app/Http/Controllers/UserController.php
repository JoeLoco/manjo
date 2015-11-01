<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Socialize;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function login() {
        
        if (!Auth::check()) {
            return Socialize::with('github')->redirect();
        }

        return redirect(sprintf('/profile/%s' , Auth::user()->id));
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function profile($id) {
        return view('user.profile')->with("user",User::findOrFail($id));
    }

    public function auth() {
        
        
        if (Auth::check()) {
            return redirect(sprintf('/profile/%s' , Auth::user()->id));
        }

        $git_user = Socialize::with('github')->user();

        if (!$git_user) {
            return redirect('/');
        }

        $user = User::where("github_id", $git_user->getId())->first();

        if (!$user) {
            // Create new user
            $user = new User();
            $user->name = $git_user->getName();
            $user->nick_name = $git_user->getNickName();
            $user->email = $git_user->getEmail();
            $user->github_id = $git_user->getId();
            $user->avatar = $git_user->getAvatar(); 
            $user->save();
        }

        Auth::loginUsingId($user->id);

        return redirect(sprintf('/profile/%s' , Auth::user()->id));
    }

}
