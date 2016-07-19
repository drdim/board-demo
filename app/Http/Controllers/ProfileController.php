<?php

namespace App\Http\Controllers;
use \Auth;
use App\User;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showMyProfile(){
        $id = Auth::user()->id;
        return view('/profile/show', ['user' => User::findOrFail($id)]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateMyProfile(){
        $id = Auth::user()->id;
        return view('/profile/edit', ['user' => User::findOrFail($id)]);
    }
}
