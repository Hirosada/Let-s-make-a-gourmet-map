<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Member extends Model
{
	use HasFactory;
	/**
	 * モデルと関連しているテーブル
	 *
	 * @var string
	 */
	protected $table = 'member';

	public function insertMemberData($save_data) {
		$this->member_name = $save_data['member_name'];
		$this->member_postcode = $save_data['member_postcode'];
		$this->member_adress = $save_data['member_adress'];
		$this->member_phone = $save_data['member_phone'];
		$this->member_email = $save_data['member_email'];
		$this->member_password = Hash::make($save_data['member_password']);
		$this->member_gender = $save_data['member_gender'];
		$this->member_profile = $save_data['member_profile'];
		$this->prefecture_code = $save_data['prefecture_code'];
		$this->admin_flag = $save_data['admin_flag'];
		$this->save();
	}
}
