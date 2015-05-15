<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller {

	public function index(){

	}

	public function show($name){
		$user = User::where('name', '=', $name)->first();

		$postArray = $user->posts->toArray();

		return view('user.show')->with(['user' => $user, 'postArray' => $postArray]);
	}

} 