<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Socialite;

class SocialitesController extends Controller
{
    public function qq()
    {
        return Socialite::with('qq')->redirect();
    }

    public function callback()
    {
        $info= Socialite::driver('qq')->user();

        $user = User::where('provider', 'qq') -> where('uid', $info -> id) -> first();
        if ($user) {
            $user = User::create([
               'provider' => 'qq',
               'uid' => $info -> id,
               'email' => 'qq+' . $info->id . '@example.com',
               'password' => bcrypt(Str::random(10)),
               'name' => $info -> nickname,
                'avatar' => $info -> avatar,
            ]);

            Auth::login($user,true);
            return redirect('/');
        }
    }
}
