<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index() {
		$users = DB::table('user')->where('current_weight', '<>', NULL)->get();

		return view('content', compact('users'));
	}
}
