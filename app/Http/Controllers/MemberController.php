<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
	function __construct()
	{

	}

	public function register() {
		return view('member.register');
	}

	public function postRegiser() {
		dd('ok');
	}
}
