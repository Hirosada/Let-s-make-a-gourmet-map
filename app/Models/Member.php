<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    public function insertMemberData($save_data){
        $this->name = $save_data['name'];
        $this->email = $save_data['email'];
        $this->postcode = $save_data['postcode'];
        $this->address = $save_data['address'];
        $this->phone_number = $save_data['phone'];
        $this->password = Hash::make($save_data['password']);
        $this->gender = $save_data['gender'];
        $this->profile = $save_data['profile'];
        $this->prefecture_code = $save_data['prefecture_code'];
        $this->admin_flag = $save_data['admin_flag'];
        $this->save();
    }

    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'postcode' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
        'password' => 'required',
        'gender' => 'required',
    );

}
