<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Socialize;
use App\Models\User;
use App\Models\SkillUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    /**
     * Login current user using github oauh
     * @return type
     */
    public function login() {

        if (!Auth::check()) {
            return Socialize::with('github')->redirect();
        }

        return redirect(sprintf('/profile/%s', Auth::user()->id));
    }

    /**
     * Logout current user
     * @return type
     */
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Login github user into manjo and/or create nem accounts using github user
     * @param type $id
     * @return type
     */
    public function auth() {

        if (Auth::check()) {
            return redirect(sprintf('/profile/%s', Auth::user()->id));
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

        return redirect(sprintf('/profile/%s', Auth::user()->id));
    }

    /**
     * Show users profile page
     * @param type $id
     * @return type
     */
    public function view($id) {
        return view('user.view')->with("user", User::findOrFail($id));
    }

    /**
     * Show users profile page
     * @param type $id
     * @return type
     */
    public function edit() {

        if (!Auth::check()) {
            return redirect('/');
        }

        return view('user.edit')->with("user", Auth::user());
    }

    public function setSkillLevel() {

        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = SkillUser::firstOrNew([
                    'user_id' => Auth::user()->id,
                    'skill_id' => Input::get("skill_id")
                        ]
        );

        $user->level = Input::get("level");
        if($user->save())
        {
            return response()->json(['result' => true]);
        }
        
        return response()->json(['result' => false]);
    }
    
    public function setSkillLove() {

        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $skill_user = SkillUser::firstOrNew([
                    'user_id' => Auth::user()->id,
                    'skill_id' => Input::get("skill_id")
                        ]
        );

        $skill_user->love = true;

        DB::table("skill_user")
                ->where('user_id',Auth::user()->id)
                ->update(['love'=>false]);

        DB::table("users")
                ->where('id',Auth::user()->id)
                ->update(['love_skill_id'=>Input::get("skill_id")]);
        
        if($skill_user->save())
        {
            return response()->json(['result' => true]);
        }
        
        return response()->json(['result' => false]);
    }

}
