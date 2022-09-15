<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use \App\Http\Requests\CreateMemberRequest;
class MemberController extends Controller
{
	function __construct()
	{
		$this->gender_array = [
			1 => '男性',
			2 => '女性',
			3 => 'どちらでもない',
		];
	}

	public function register() {
		return view('member.register');
	}

	public function confirm(CreateMemberRequest $request) {
		$gender_array = $this->gender_array;
		return view('member.confirm', compact('request', 'gender_array'));
	}

	public function postRegiser(Request $request) {
		$save_data = [
			'name' => $request['name'],
			'postcode' => $request['postcode'],
			'adress' => $request['adress'],
			'phone_number' => $request['phone_number'],
			'email' => $request['email'],
			'password' => $request['password'],
			'gender' => $request['gender'],
			'prefecture_code' => $request['prefecture_code'],
			'admin_flag' => !empty($request['admin_flag']) ? $request['admin_flag'] : 0,
			'profile' => !empty($request['profile']) ? $request['profile'] : 'default_prof.jpeg',
		];

		$member = new Member();
		$member->insertMemberData($save_data);

		return view('member.complete');
	}

	public function login() {
		
	}
}
